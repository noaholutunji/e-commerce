<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\User;
use App\Project;
use Facades\Tests\Setup\ProjectFactory;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ManageProductsTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test */

    public function guests_cannot_manage_products()
    {
        $product = factory('App\Product')->create();
        
        $this->get('/products')->assertRedirect('login');
        $this->get('/products/create')->assertRedirect('login');
        $this->get($product->path().'/edit')->assertRedirect('login');
        $this->get($product->path())->assertRedirect('login');
        $this->post('/products', $product->toArray())->assertRedirect('login');
    }


    /** @test */
    public function a_user_can_add_a_product()
    {
        $this->withoutExceptionHandling();
        
        $this->signIn();
        

        $this->get('/products/create')->assertStatus(200);

        $attributes =  [
         'name' => $this->faker->sentence,
         'brand' => $this->faker->sentence,
         'price' => $this->faker->randomDigit,
         'image' => $this->faker->imageUrl,
         'description' => $this->faker->sentence
        ];

        $this->post('/products', $attributes)->assertRedirect('/products');

        $this->assertDatabaseHas('products', $attributes);

        $this->get('/products')->assertSee($attributes['name']);
    }

    /** @test */

    public function a_user_can_view_their_product()
    {
        $this->signIn();
        $this->withoutExceptionHandling();

        $product = factory('App\Product')->create(['owner_id' => auth()->id()]);

        $this->get($product->path())
              ->assertSee($product->name)
              ->assertSee($product->brand)
              ->assertsee($product->price)
              ->assertsee($product->image)
              ->assertsee($product->description);
    }

    /** @test */

    public function an_authenticated_user_cannot_view_the_products_of_others()
    {
        $this->signIn();

        // $this->withoutExceptionHandling();
 
        $product = factory('App\Product')->create();

        $this->get($product->path())->assertStatus(403);
    }


    /** @test */
    public function a_product_requires_a_name()
    {
        $this->signIn();

        $attributes = factory('App\Product')->raw(['name' => '']);

        $this->post('/products', $attributes)->assertSessionHasErrors('name');
    }

    /** @test */
    public function a_product_requires_a_brand()
    {
        $this->signIn();

        $attributes = factory('App\Product')->raw(['brand' => '']);

        $this->post('/products', $attributes)->assertSessionHasErrors('brand');
    }

    /** @test */
    public function a_product_requires_a_price()
    {
        $this->signIn();
        $attributes = factory('App\Product')->raw(['price' => '']);

        $this->post('/products', $attributes)->assertSessionHasErrors('price');
    }

    /** @test */
    public function a_product_requires_an_image()
    {
        $this->signIn();

        $attributes = factory('App\Product')->raw(['image' => '']);

        $this->post('/products', $attributes)->assertSessionHasErrors('image');
    }

    /** @test */
    public function a_product_requires_a_description()
    {
        $this->signIn();

        $attributes = factory('App\Product')->raw(['description' => '']);

        $this->post('/products', $attributes)->assertSessionHasErrors('description');
    }

    /** @test */

    public function a_user_can_update_a_product()
    {
        $this->signIn();
        
        $this->withoutExceptionHandling();

        // $product = ProductFactory::create();
        $product= factory('App\Product')->create(['owner_id' => auth()->id()]);

        $this->actingAs($product->owner)
             ->patch($product->path(), $attributes = [
         'name' => 'Changed',
         'brand' => 'Changed',
         'price' => 'Changed',
         'image' => 'Changed',
         'description' => 'Changed'
    ])->assertRedirect($product->path());

        $this->get($product->path().'/edit')->assertOk();

        $this->assertDatabaseHas('products', $attributes);
    }


    /** @test */

    public function a_user_can_delete_a_product()
    {
        $product = factory('App\Product')->create();
        

        $this->actingAs($product->owner)
             ->delete($product->path())
             ->assertRedirect('/products');

        $this->assertDatabaseMissing('products', $product->only('id'));
    }

    /** @test */
    public function guests_cannot_delete_products()
    {
        $product = factory('App\Product')->create();
        
        $this->delete($product->path())
             ->assertRedirect('/login');

        $this->signIn();

        $this->delete($product->path())->assertStatus(403);
    }
}
