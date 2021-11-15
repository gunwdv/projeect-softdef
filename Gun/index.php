<!doctype html>
<html lang="th">
<head>      
    <title>My page</title>
    <?php require('inc_header.php'); ?>  
</head>
<body>
    <?php require('inc_navbar.php'); ?>
    <div class="">
        <div class="container py-4">
           <div class="card card-dark mb-4 rounded-0">
              <div class="card-header rounded-0">
                หน้าของฉัน
              </div>
              <div class="card-body">
                  <form>
                      <div class="row">
                        <div class="col-sm-3 text-center">
                            <img src="images/user-sample.png" class="imgProfile">
                            <div class="box-browse">
                                <input class="form-control inputfile" type="file" id="formFile">
                                <label for="file-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg> <span>เลือกไฟล์รูปภาพ…</span></label>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label fw-normal text-white">ชื่อผู้ใช้</label>
                                <div class="col-sm-10">
                                  <p class="form-control-plaintext text-white">65010345@kmitl.ac.th</p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label fw-normal text-white">นามแฝง</label>
                                <div class="col-sm-10">
                                  <p class="form-control-plaintext text-white">Big O <button type="button" class="btn btn-link text-orange p-0" data-bs-toggle="modal" data-bs-target="#changeUserNameModal"><i class="fas fa-pen-square"></i></button></p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label fw-normal text-white">เพศ</label>
                                <div class="col-sm-10">
                                  <select class="form-select">
                                      <option value="N">ไม่ระบุ</option>
                                      <option value="M">ชาย</option>
                                      <option value="F">หญิง</option>
                                  </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label fw-normal text-white">คณะ</label>
                                <div class="col-sm-10">
                                  <select class="form-select">
                                      <option value="">วิศวกรรมศาสตร์</option>
                                      <option value="">สถาปัตยกรรมศาสตร์</option>
                                      <option value="">วิทยาศาสตร์</option>
                                  </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label fw-normal text-white">ภาควิชา</label>
                                <div class="col-sm-10">
                                  <select class="form-select">
                                      <option value="">วิศวกรรมคอมพิวเตอร์</option>
                                      <option value=""></option>
                                      <option value=""></option>
                                  </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label fw-normal text-white">แนะนำตัว</label>
                                <div class="col-sm-10">
                                    <textarea rows="3" class="form-control" id="inputEmail3"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">&nbsp;</label>
                                <div class="col-sm-10 text-center">
                                  <button class="btn btn-orange">บันทึกข้อมูล</button>
                                </div>
                            </div>
                        </div>  
                      </div>
                  </form>
              </div>
            </div>
            
            <div class="card card-dark mb-3 rounded-0">
              <div class="card-header rounded-0">
                หมวดหมู่ที่สนใจ
              </div>
              <div class="card-body">
                  <form>
                      <div class="row">
                        <div class="col-sm-6">
                            <div class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="cateInterest">
                              <label class="form-check-label" for="defaultCheck1">
                                กลุ่มวิชาภาษา
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" name="cateInterest">
                              <label class="form-check-label" for="defaultCheck2">
                                กลุ่มวิชามนุษย์ศาสตร์
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" value="" id="defaultCheck3" name="cateInterest">
                              <label class="form-check-label" for="defaultCheck3">
                                กลุ่มวิชาสังคมศาสตร์
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" value="" id="defaultCheck4" name="cateInterest">
                              <label class="form-check-label" for="defaultCheck4">
                                กลุ่มวิชาวิทยาศาสตร์ กับคณิตศาสตร์
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" value="" id="defaultCheck5" name="cateInterest">
                              <label class="form-check-label" for="defaultCheck5">
                                วิชาเลือกเสรี
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" value="" id="defaultCheck6" name="cateInterest">
                              <label class="form-check-label" for="defaultCheck6">
                                กลุ่มคุณค่าแห่งชีวิต
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" value="" id="defaultCheck7" name="cateInterest">
                              <label class="form-check-label" for="defaultCheck7">
                                กลุ่มวิถีสังคม
                              </label>
                            </div>
                        </div>  
                        <div class="col-sm-6">
                            <div class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" value="" id="defaultCheck8" name="cateInterest">
                              <label class="form-check-label" for="defaultCheck8">
                                กลุ่มศาสตร์แห่งการคิด
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" value="" id="defaultCheck9" name="cateInterest">
                              <label class="form-check-label" for="defaultCheck9">
                                ศิลปแห่งการจัดการ
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" value="" id="defaultCheck10" name="cateInterest">
                              <label class="form-check-label" for="defaultCheck10">
                                กลุ่มภาษา และการสื่อสาร
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" value="" id="defaultCheck11" name="cateInterest">
                              <label class="form-check-label" for="defaultCheck11">
                                กลุ่มทักษะที่จำเป็นในศตวรรษที่21
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" value="" id="defaultCheck12" name="cateInterest">
                              <label class="form-check-label" for="defaultCheck12">
                                กลุ่มทักษะด้านบุคคลและทักษะส่งเสริมวิชาชีพ
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" value="" id="defaultCheck13" name="cateInterest">
                              <label class="form-check-label" for="defaultCheck13">
                                กลุ่มทักษะด้านการจัดการ และภาวะความเป็นผู้นำ
                              </label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" value="" id="defaultCheck14" name="cateInterest">
                              <label class="form-check-label" for="defaultCheck14">
                                กลุ่มทักษะด้านภาษา และการสื่อสาร
                              </label>
                            </div>
                        </div>
                        <div class="col-sm-12 text-center">
                            <hr>
                            <button class="btn btn-orange">บันทึกข้อมูล</button>  
                        </div>  
                      </div>
                  </form>
              </div>
            </div>
        </div>
    </div>
    <?php require('inc_footer.php'); ?> 
<!-- Modal -->
<div class="modal fade" id="changeUserNameModal" tabindex="-1" aria-labelledby="changeUserNameModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form>  
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="changeUserNameModalLabel">เปลี่ยนชื่อนามแฝง</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">นามแฝง</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" value="Big O">
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">ยกเลิก</button>
            <button type="button" class="btn btn-success">บันทึกการแก้ไข</button>
          </div>
        </div>
    </form>
  </div>
</div>    
</body>
</html>    