<!DOCTYPE html>
<html>
  <head>
    <base href="{{ env('APP_URL') }}">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="custom/scroll.css" />
    <title>The Movie | Movie Details</title>
  </head>

  <body>
    <div class="overflow-hidden">
      @include('frontend.component.header')

      <!-- ==================== START CONTENT ==================  -->
      
      {{-- @include('frontend.component.shortcutbar') --}}

      <!-- ============== START POSTER ================  -->
      
      @include('frontend.component.detailposter')

      <!-- ------------- START POSTER RESPONSIVE ----------  -->
      @include('frontend.component.detailposterresponsive')
     
      
      <!-- <div class="movie-detail-rp block lg:hidden">
        Content for lg screen size
        <div class="movie-detail-rp-poster">
          <img
            src="https://www.themoviedb.org/t/p/w300_and_h450_bestv2/3aJvYn7PBMBOYkZdD2Rc0gn1Lxd.jpg"
            alt=""
          />
        </div>
        <div class="movie-detail-rp-content">
      
          <div class="poster-title">
            <h2 class="text-2xl font-semibold">Trừng Phạt</h2>
            <span class="text-lg font-medium">(2022)</span>
          </div>
      
          <ul class="poster-actions flex justify-center gap-20 text-white">
            <li class="chart">
              <div class="chart-content flex items-center justify-center w-14 h-14 bg-black rounded-full">
                <span class="chart-content--score text-2xl font-bold"> 89<sup class="text-sm font-normal">%</sup> </span>
              </div>
              <p class="chart-title text-center">
                User
                Score
              </p>
            </li>
      
            <li class="poster-item">
              <a href="#" class="poster-item--link">
                <img
                  src="https://www.themoviedb.org/assets/2/v4/glyphicons/basic/glyphicons-basic-175-play-806cb05551791b8dedd7f8d38fd3bd806e2d397fcfeaa00a5cc9129f0819fd07.svg"
                  alt=""
                />
              </a>
              Play Trailer
            </li>
          </ul>
      
          <div class="poster-facts flex flex-col bg-opacity-10 border-t border-b border-opacity-20 py-2">
            <div class="text-center">
              <span class="certification bg-opacity-50 p-1 rounded border border-opacity-50 text-sm text-gray-600">PG - 13</span>
              <span class="date text-sm text-gray-600">08/25/2023 (US)</span>
              <span class="runtime poster-facts--relative text-sm text-gray-600"> 1h24m </span>
            </div>
            
            <span class="category poster-facts--relative text-center text-sm text-gray-600">
              Phim Hành Động, Phim Bí Ẩn, Phim Gây Cấn, Phim Hình Sự
            </span>
          </div>
      
          <div class="overview py-4">
            <p class="overview-lable text-gray-600 text-lg font-semibold">Overview</p>
            <span class="text-gray-300">
              Matt Turner (Liam Neeson) là một doanh nhân người Mỹ thành
              đạt sống ở Berlin, đang phải cân bằng giữa sự nghiệp tài
              chính đang bùng nổ và trách nhiệm gia đình. Một buổi sáng
              đang lái xe đưa con đến trường, Matt nhận được một cuộc điện
              thoại từ một giọng nói bí ẩn: có một quả bom dưới ghế của
              anh ấy sẽ phát nổ trừ khi anh ấy hoàn thành một loạt nhiệm
              vụ cụ thể, và nhanh chóng. Bị mắc kẹt trong một cuộc rượt
              đuổi tốc độ cao khắp thành phố, Matt phải làm theo chỉ dẫn
              ngày càng nguy hiểm của “kẻ lạ mặt” trong cuộc chạy đua với
              thời gian để bảo vệ gia đình và tìm lời giải đáp cho những
              bí ẩn đang diễn ra. Bộ phim ly kỳ về chiếc đồng hồ tích tắc
              nhập vai này của các nhà sản xuất phim NON-STOP và THE
              COMMUTER thu hút khán giả tham gia vào một hành trình cứu
              chuộc và trả thù có chỉ số octan cao.
            </span>
          </div>
      
          <div class="people-poster grid grid-cols-2 text-center">
            <div class="people-poster--profile">
              <a href="/person/41671-nimrod-antal" class="text-base font-medium text-white">Nimród Antal</a>
              <p class="character text-sm text-gray-600">Director</p>
            </div>
            <div class="people-poster--profile">
              <a href="/person/41671-nimrod-antal" class="text-base font-medium text-white">Nimród Antal</a>
              <p class="character text-sm text-gray-600">Director</p>
            </div>
          </div>
        </div>
      </div> -->
      
      <!-- =============== END POSTER ================ -->

      <!-- ========================= END CONTENT ===============  -->

      <!-- ==================================== START FOOTER  ========================= -->
      @include('frontend.component.footer')
      <!-- ==================================== END FOOTER  ========================= -->
    </div>
  </body>
</html>
