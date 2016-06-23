@extends('frontend.layout')
@section('body')
    <div id="category">
        <div class="container">

            <ol class="breadcrumb">
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Miền bắc</a></li>
                <li class="active">Du lịch cao nguyên đá Đồng Văn hùng vĩ và tráng lệ</li>
            </ol>
        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div id="body-detail-1">
                    <div id="content">
                        <div class="title">Du lịch cao nguyên đá Đồng Văn hùng vĩ và tráng lệ</div>
                        <div class="time"> 18/06/2016 11:11</div>
                        <a href=""><button class="btn btn-default">GIẢI TRÍ</button></a>
                        <div class="heading">
                            Du lịch cao nguyên đá Ðồng Văn là dịp để thử lòng can đảm của bạn bởi đèo cao vực thẳm. Nhưng đổi lại,
                            bạn được những ngày đắm mình với thiên nhiên hùng vĩ, sống bên những con người còn nghèo khó nhưng
                            vẫn tràn đầy niềm vui và hạnh phúc trong cuộc sống. Bạn cũng sẽ được thả hồn trong tiếng khèn, tiếng sáo.
                            Biết đâu nó sẽ làm bạn phải ngẩn ngơ khi rời xa chốn này.
                        </div>
                        <hr>
                        <div class="list-title">
                            <ul>
                                <li><a href="">Thung nai Hòa Bình</a> </li>
                                <li><a href="">Rừng quốc gia ba vì</a> </li>
                                <li><a href="">Rừng quốc gia Cúc Phương</a> </li>
                            </ul>
                        </div>

                        <hr>

                        <p>
                            Nằm cách thị xã Hà Giang 132km theo đường 4C, cao nguyên đá Đồng Văn là một vùng núi đá hiểm trở và
                            hùng vĩ ở cực bắc, cảnh đẹp tráng lệ và ấn tượng.
                        </p>
                        <p>
                            Cao nguyên đá Đồng Văn nằm ở độ cao trung bình 1.000 – 1.600m so với mực nước biển, trên diện tích
                            gần 2.356km² trải dài qua địa bàn 4 huyện Quản Bạ, Yên Minh, Mèo Vạc và Đồng Văn của tỉnh Hà Giang.
                            Đây là một trong những vùng đá vôi đặc biệt của cả nước, chứa đựng những dấu ấn tiêu biểu về lịch
                            sử phát triển của vỏ trái đất. Đồng Văn có tới 80% diện lộ đá vôi, được tạo thành từ những điều kiện
                            môi trường và giai đoạn phát triển rất khác nhau kéo dài hàng trăm triệu năm.
                        </p>
                        <img src="{{ asset('/frontend/images/cao-nguyen-da.jpg') }}">
                        <p>
                            Từ TP. Hà Giang, đi theo quốc lộ 4C khoảng 43km tới huyện Quản Bạ; tiếp tục theo con đường này qua
                            đèo Cán Tỷ hiểm trở, những cánh rừng thông đại ngàn, những con dốc quanh co, uốn lượn, du khách sẽ
                            lần lượt tới các huyện Yên Minh, Đồng Văn và Mèo Vạc để khám phá cao nguyên đá.
                        </p>
                        <div class="author">Theo hphuot.xyz. Ảnh Nguyễn Công hoan</div>
                    </div>
                    <div class="face">
                        <img src="{{ asset('/frontend/images/like.png') }}">
                        <img src="{{ asset('/frontend/images/share.png') }}">
                        <img src="{{ asset('/frontend/images/googleplus.png') }}">
                        <p>
                            <img src="{{ asset('/frontend/images/iconfa.png') }}">
                            Hãy là người đầu tiên trong số bạn bè của bạn thích điều này
                        </p>
                    </div>
                    <div class="comment">
                        <div class="title">Bình luận bài viết<label>(20)</label></div>
                        <hr>
                        <div class="input">
                            <form>
                                <input type="text" placeholder="Thêm một bình luận ở đây">
                                <button type="submit">Gửi</button>
                            </form>
                        </div>
                        <div class="list">
                            <div class="media">
                                <div class="media-left">
                                    <div class="avatar">
                                        <img src="{{ asset('/frontend/images/hoan.JPG') }}">
                                    </div>
                                </div>
                                <div class="media-right">
                                    <div class="media-body">
                                        <div class="heading">Nguyễn Công Hoan <label>2 hrs ago</label></div>
                                        Địa điểm đẹp quá !!!!!Địa điểm đẹp quá !!!!!Địa điểm đẹp quá !!!!!Địa điểm đẹp quá !!!!!Địa điểm đẹp quá !!!!!Địa điểm đẹp quá !!!!!Địa điểm đẹp quá !!!!!
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="avatar">
                                                <img src="{{ asset('/frontend/images/hoan.JPG') }}">
                                            </div>
                                        </div>
                                        <div class="media-right">
                                            <div class="media-body">
                                                <div class="heading">Nguyễn Công Hoan <label>2 hrs ago</label></div>
                                                Địa điểm đẹp quá !!!!!Địa điểm đẹp quá !!!!!Địa điểm đẹp quá !!!!!Địa điểm đẹp quá !!!!!Địa điểm đẹp quá !!!!!Địa điểm đẹp quá !!!!!Địa điểm đẹp quá !!!!!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <div class="avatar">
                                        <img src="{{ asset('/frontend/images/hoan.JPG ') }}">
                                    </div>
                                </div>
                                <div class="media-right">
                                    <div class="media-body">
                                        <div class="heading">Nguyễn Công Hoan <label>2 hrs ago</label></div>
                                        Địa điểm đẹp quá !!!!!Địa điểm đẹp quá !!!!!Địa điểm đẹp quá !!!!!Địa điểm đẹp quá !!!!!Địa điểm đẹp quá !!!!!Địa điểm đẹp quá !!!!!Địa điểm đẹp quá !!!!!
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <div class="avatar">
                                        <img src="{{ asset('/frontend/images/hoan.JPG') }}">
                                    </div>
                                </div>
                                <div class="media-right">
                                    <div class="media-body">
                                        <div class="heading">Nguyễn Công Hoan <label>2 hrs ago</label></div>
                                        Địa điểm đẹp quá !!!!!Địa điểm đẹp quá !!!!!Địa điểm đẹp quá !!!!!Địa điểm đẹp quá
                                        !!!!!Địa điểm đẹp quá !!!!!Địa điểm đẹp quá !!!!!Địa điểm đẹp quá !!!!!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="add"><a href="">Tải thêm ...</a></div>
                    </div>
                </div>
                <div id="body-detail-2">
                    <div class="panel">
                        <div class="panel-heading">
                            <div>
                                <a href="box-heading">Các tin khác</a>
                            </div>
                            <img src="{{ asset('/frontend/images/heading.png') }}">
                            <div class="triangle"></div>

                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="thumbnail-top">
                                        <img src="{{ asset('/frontend/images/cao-nguyen-da.jpg') }}">
                                        <div class="caption2">
                                            Du lịch cao nguyên đá Đồng Văn hùng vĩ và tráng lệ
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="thumbnail-top">
                                        <img src="{{ asset('/frontend/images/cot-co-lung-cu.jpg') }}">
                                        <div class="caption2">
                                            Cột cờ Lũng Cú - nơi địa đầu Tổ quốc
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="thumbnail-top">
                                        <img src="{{ asset('/frontend/images/dong-song-nho-quan.jpg') }}">
                                        <div class="caption2">
                                            Dọc theo dòng sông Nho Quế huyền thoại
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="list-title">
                                <ul>
                                    <li><a href="">Du lịch cao nguyên đá Đồng Văn hùng vĩ và tráng lệ</a><span class="time">22/5/2016 11:30</span></li>
                                    <li><a href="">Du lịch cao nguyên đá Đồng Văn hùng vĩ và tráng lệ</a><span class="time">22/5/2016 11:30</span></li>
                                    <li><a href="">Du lịch cao nguyên đá Đồng Văn hùng vĩ và tráng lệ</a><span class="time">22/5/2016 11:30</span></li>
                                    <li><a href="">Du lịch cao nguyên đá Đồng Văn hùng vĩ và tráng lệ</a><span class="time">22/5/2016 11:30</span></li>
                                    <li><a href="">Du lịch cao nguyên đá Đồng Văn hùng vĩ và tráng lệ</a><span class="time">22/5/2016 11:30</span></li>
                                    <li><a href="">Du lịch cao nguyên đá Đồng Văn hùng vĩ và tráng lệ</a><span class="time">22/5/2016 11:30</span></li>
                                    <li><a href="">Du lịch cao nguyên đá Đồng Văn hùng vĩ và tráng lệ</a><span class="time">22/5/2016 11:30</span></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <img src="{{ asset('/frontend/images/banner3.jpg') }}">
            </div>
        </div>
    </div>
@endsection