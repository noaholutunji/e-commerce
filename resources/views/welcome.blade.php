
@include('partials.header')

<div class="p-3 mb-auto bg-info text-dark text-center display-5">Get all kind of phones here at the cheapest price possible </div>
    
  
<!-- <div class="container"> -->
    <div id="carouselExampleIndicators" class="carousel slide carousel-center" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="/details2">
            <img class="d-block w-100" src="data:image/jpeg;base64,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mtDejmmXH9ZqzsvaOFgZfMX7r3XcXmJ2h9jj5VO/nD3lVdu7dkmgeyOV7ZLYoy1xBxtzA7cx2r5s3ax4qX8MHiu4yO6zpAcr6r6RL9o78Vn+N1T9Il+0d+K8/tG2NxGjji7Tr71WxKPVlZ61oeoPK6q+kS+278VrfytqvpEvtuXm8SxdPVsetZ3n8qqr6RN7blSFW6ZzzI4ucWOJJzLsPlZ8cge23Bc1bqR9nt4Xwn9V2R9xK4m8z7q7Xmfd2KeYmgqIwbOZPSvJBzdHhlZh6g51/wBpcFX6Ca3OsOkkRbb6zbOHvaqChyIiKAREQEREE4n2N7XG8cRvCuRMF3xE5PAMTj6wzZ35tPSehUFsDrttvGberePj3oIELC2SuxeVvOvXxWtAREQEREGbrCIgIiICIiAiIgLLTY3WEQTEhzO8396iDZYRBt54pzxWpEE3vuoIiAiIgIiIJtfY3UERAREQEREBERAWQVhEGVhEQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREH//Z" alt="First slide">
          </a>
          </div>
          <div class="carousel-item">
              <a href="/details">
            <img class="d-block w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_cnd8frxl7ItSiYaRvj7xmlHLsQ1nHE2m63WJstEiYnUJbRhHsQ" alt="Second slide">
            </a>
          </div>
          <div class="carousel-item">
            <a href="/details3">
            <img class="d-block w-100" src="https://mobitrends.co.ke/wp-content/uploads/2019/03/Infinix-Hot-7-X624B-Dual-Camera-Display.jpg" alt="Third slide">
          </a>
          </div>
          <div class="carousel-item">
              <a href="/details4">
              <img class="d-block w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPhfO5fzAnFWmBGgj6PE6XAmr0ZKMrg5hRZSDorK-bhn_Ovr_fBg" alt="Fourth slide">
            </a>
            </div>
            <div class="carousel-item">
                <a href="/details4">
                <img class="d-block w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcReM4YAgOCnr-DZKlQsVJNHUQDttAfYMyk9B9VZPhmnkxX-4bfKoA" alt="Fifth slide">
              </a>
              </div>
              <div class="carousel-item">
                  <a href="/details5">
                  <img class="d-block w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRvU_qKh8wj_PuoRyq6PmZAssSu-TvXo8J1XKTAuOWVuAMQ79T" alt="Sixth slide">
                </a>
                </div>
                <div class="carousel-item">
                    <a href="/details6">
                    <img class="d-block w-100" src="https://www.freebrowsinglink.com/wp-content/uploads/2017/03/innjoo-4-1-960x500.jpg" alt="Seventh slide">
                  </a>
                  </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


      @include('partials.footer')

      