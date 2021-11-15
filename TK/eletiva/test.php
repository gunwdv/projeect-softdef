<!DOCTYPE html>
<html lang="en">

</html>

<head>
    <meta name=" viewport " content="width=device-width, initial-scale=1.0 ">
    <title>post reveiw</title>
    <link rel="stylesheet " type="text/css " href="css/post-reveiw.css ">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css " rel="stylesheet ">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid mt-5">
        <!-- หน้าโพสต์รีวิว -->
        <div class="row">
            <div class="col-lg-3 col-sm-2"></div>

            <div class="col-lg-5 col-sm-8">
                <div class="post-review">
                    <div class="review-box">

                        <i class="fas fa-ellipsis-h " id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></i>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li> <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#staticBackdrop">รายงานโพสต์</a></li>
                            <li><a class="dropdown-item" href="#">ลบโพสต์</a></li>
                        </ul>

                        <p class="title"><i class="fas fa-pen"></i> ขอรีวิววิชา Eng for biz หน่อยครับ
                            <span class="badge rounded-pill " id="code">90201017</span><span class="badge rounded-pill" id="category">กลุ่มภาษา</span>
                        </p>

                        <p class="post-item">เช้าวันหนึ่งวันนั้น ผมไปเรียนว่ายน้ำ เลยอยากทราบว่าวิชาเสรีที่สอนเรียนยากไหมครับ ถ้าผมปั่นจักรยานไม่เป็นจะเรียนได้ไหม</p>
                        <div class="d-flex align-items-center ">
                            <div class="d-inline ">
                                <img src="/Jan/image/avatar.png " alt="Avatar" class="avatar">
                            </div>
                            <div class="d-inline col-sm-6">
                                <strong>อยากเกิดเป็นหนอนบนต้นกุหลาบ</strong>
                                <span class="d-block " id="time">30 นาที ที่ผ่านมา</span>
                            </div>
                            <div class="d-grid col-lg-5 col-md-5 col-sm-4 float-end">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">แสดงความคิดเห็น</button>
                                <i class="fas fa-plus-circle" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class=" col-lg-4 col-sm-2"></div>
        </div>

        <!-- โพสต์ comment โพสต์รีวิว -->

        <div class="row ">

            <div class="col-lg-4 col-sm-3"></div>
            <div class="col-lg-4 col-sm-7">
                <div class="comment-review">
                    <div class="comment-box">
                        <i class="fas fa-ellipsis-h " id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></i>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#staticBackdrop">รายงานโพสต์</a></li>
                            <li><a class="dropdown-item " href="#">ลบโพสต์</a></li>
                        </ul>
                        <div class="d-flex align-items-center ">
                            <div class="d-inline ">
                                <img src="/Jan/image/avatar2.png " alt="Avatar" class="avatar">
                            </div>
                            <div class="d-inline ">
                                <strong>กัปตันอเมริกา</strong>
                                <span class="d-block" id="time">20 นาที ที่ผ่านมา</span>
                            </div>
                        </div>
                        <div class="d-block text-start ">
                            <p class="comment">อาจารย์ใจดีนะ แต่งานเยอะไปหน่อย</p>
                        </div>
                        <div class="star-review ">
                            <span class="heading">คะแนน</span>
                            <span class="fa fa-star checked "></span>
                            <span class="fa fa-star checked "></span>
                            <span class="fa fa-star checked "></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star "></span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-2"></div>
                </div>
            </div>

        </div>
        <!-- modal box -->
        <!-- modal comment รีวิว -->
        <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content ">
                    <div class="modal-header ">
                        <h5 class="modal-title " id="exampleModalLabel">แสดงความคิดเห็น</h5>
                        <button type="button " class="btn-close btn-close-white " data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body ">

                        <textarea class="form-control form-control-sm " id="comment-item" placeholder=" " rows="5" required> </textarea>
                        <div class="review-choose float-end ">
                            <span class="heading">ให้คะแนน</span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star "></span>
                        </div>
                    </div>
                    <div class="modal-footer ">
                        <button type="button">ส่งความคิดเห็น</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal รายงานโพสต์ -->
        <div class="modal fade " id="staticBackdrop" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class=" modal-dialog modal-dialog-centered ">
                <div class="modal-content">
                    <div class="modal-body ">
                        <p class="modal-title text-center mx-5 my-2 " id="staticBackdropLabel">เนื่องจากโพสต์ดังกล่าวมีการใช้ถ้อยคำที่ไม่สุภาพ และไม่ให้เกียรติซึ่งกันและกัน เพื่อรักษาบรรยากาศของเว็บไซต์ ข้าพเจ้าจึงขอให้มีการตรวจสอบโพสต์ดังกล่าว</p>
                        <p class="text-center">ต้องการรายงานโพสต์นี้ใช่หรือไม่</p>
                        <div class="row">
                            <div class=" col-lg-3 col-sm-3"></div>
                            <div class=" col-lg-6 col-sm-6">
                                <button type="button" class="btn text-center float-start" id="yes" data-bs-toggle="modal" data-bs-target="#need">ต้องการ</button>
                                <button type="button" class="btn text-center float-end " id="no" data-bs-dismiss="modal">ไม่ต้องการ</button>
                            </div>
                            <div class=" col-lg-3 col-sm-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal รายงานโพสต์แล้ว -->
        <div class="modal fade " id="need" data-bs-keyboard="false" tabindex="-1" aria-labelledby="needLabel" aria-hidden="true">
            <div class=" modal-dialog modal-dialog-centered ">
                <div class="modal-content ">
                    <div class="modal-body ">
                        <p class="modal-title text-center" id="needLabel">โพสต์นี้ถูกรายงานแล้ว</p>
                        <div class="row">
                            <div class=" col-lg-4 "></div>
                            <div class=" col-lg-4 ">
                                <button type="button" class="btn text-center ">กลับหน้าหลัก</button>
                            </div>
                            <div class=" col-lg-4 "></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


</body>

</html>