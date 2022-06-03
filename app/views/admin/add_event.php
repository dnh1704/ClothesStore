<!Doctype html>
<html>
    <head>
        <link rel="stylesheet" href="../../../public/css/admin_root.css" />
        <link rel="stylesheet" href="../../../public/css/admin_leftbar.css" />
        <link rel="stylesheet" href="../../../public/css/admin_header.css" />
        <link rel="stylesheet" href="../../../public/css/admin/add_event.css" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="col-10" id="head-bar">
            <?php
                require '../components/admin_header.php';
            ?>
        </div>
        <?php 
            require '../components/admin_leftbar.php';
        ?>
        <div id="content" class="col-10">
            <div id="body">
                <div id="event-name" class="element">
                    <span class="element-title">Tên sự kiện</span>
                    <input type="text" name="eventName" placeholder="Nhập tên sự kiện" required>
                </div>
                <div id="use-for" class="element">
                    <span class="element-title">Áp dụng cho</span>
                    <div class="checkbox-category">
                        <input type="checkbox" name="" id="">
                        <label for="">Áo thun</label>
                    </div><div class="checkbox-category">
                        <input type="checkbox" name="" id="">
                        <label for="">Áo khoác</label>
                    </div><div class="checkbox-category">
                        <input type="checkbox" name="" id="">
                        <label for="">Áo ba lỗ</label>
                    </div><div class="checkbox-category">
                        <input type="checkbox" name="" id="">
                        <label for="">Áo sơ mi</label>
                    </div><div class="checkbox-category">
                        <input type="checkbox" name="" id="">
                        <label for="">Quần jean</label>
                    </div><div class="checkbox-category">
                        <input type="checkbox" name="" id="">
                        <label for="">Quần âu</label>
                    </div><div class="checkbox-category">
                        <input type="checkbox" name="" id="">
                        <label for="">Quần đùi</label>
                    </div><div class="checkbox-category">
                        <input type="checkbox" name="" id="">
                        <label for="">Áo thun</label>
                    </div><div class="checkbox-category">
                        <input type="checkbox" name="" id="">
                        <label for="">Áo khoác</label>
                    </div><div class="checkbox-category">
                        <input type="checkbox" name="" id="">
                        <label for="">Áo ba lỗ</label>
                    </div><div class="checkbox-category">
                        <input type="checkbox" name="" id="">
                        <label for="">Áo sơ mi</label>
                    </div><div class="checkbox-category">
                        <input type="checkbox" name="" id="">
                        <label for="">Quần jean</label>
                    </div><div class="checkbox-category">
                        <input type="checkbox" name="" id="">
                        <label for="">Quần âu</label>
                    </div><div class="checkbox-category">
                        <input type="checkbox" name="" id="">
                        <label for="">Quần đùi</label>
                    </div>
                </div>
                <div id="start-end-time" class="element">
                    <div id="start-time" class="choose-time">
                        <span class="element-title">Thời gian bắt đầu</span>
                        <input type="date" require class="choose-date">
                        <input type="time" require class="choose-hour">
                    </div><div id="end-time" class="choose-time">
                        <span class="element-title">Thời gian kết thúc</span>
                        <input type="date" require class="choose-date">
                        <input type="time" require class="choose-hour">
                    </div>
                </div>
                <div id="event-image" class="element">
                    <div id="event-image-header">
                        <span id="event-image-title" class="element-title">Hình ảnh</span>
                        <input type="file" accept="image/*" name="files[]" id="event-images" multiple style="display: none;" onchange="loadFile(event)">
                        <label for="event-images">
                            <img src="../../../public/res/img/admin/upload.png" id="upload-icon">
                        </label>
                    </div>
                    <!-- <div class="event-image-wrap">
                        <img src="../../../public/res/img/events/event1.jpg" class="event-img">
                        <span><img src="../../../public/res/img/admin/remove.png"></span>
                    </div><div class="event-image-wrap">
                        <img src="../../../public/res/img/events/event2.png" class="event-img">
                        <span><img src="../../../public/res/img/admin/remove.png"></span>
                    </div><div class="event-image-wrap">
                        <img src="../../../public/res/img/events/event1.jpg" class="event-img">
                        <span><img src="../../../public/res/img/admin/remove.png"></span>
                    </div><div class="event-image-wrap">
                        <img src="../../../public/res/img/events/event2.png" class="event-img">
                        <span><img src="../../../public/res/img/admin/remove.png"></span>
                    </div><div class="event-image-wrap">
                        <img src="../../../public/res/img/events/event1.jpg" class="event-img">
                        <span><img src="../../../public/res/img/admin/remove.png"></span>
                    </div> -->
                </div>
                <div class="element" id="add-event-btn">
                    <input type="button" value="Tạo sự kiện">
                </div>
            </div>
        </div>
        <script src="../../../public/js/add_event.js"></script>
    </body>
</html>