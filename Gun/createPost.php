<!doctype html>
<html lang="th">
<head>      
    <title></title>
    <?php require('inc_header.php'); ?>  
</head>
<body>
    <?php require('inc_navbar.php'); ?>
    <div class="">
        <div class="container py-4">
           <form>            
           <div class="card card-dark mb-2 rounded-0">
              <div class="card-header rounded-0">
                เขียนโพสต์
              </div>
              <div class="card-body py-1">
                  <div class="row">
                    <div class="col-sm-12">
                        <div class="row mb-2 bg-gray py-2">
                            <label for="inputEmail3" class="col-sm-2 col-form-label fw-normal">หมวดหมู่</label>
                            <div class="col-sm-10">
                              <select class="form-select">
                                  <option value=""></option>
                              </select>
                            </div>
                        </div>
                        <div class="row mb-2 bg-gray py-2">
                            <label for="inputEmail3" class="col-sm-2 col-form-label fw-normal">รหัสวิชา</label>
                            <div class="col-sm-4">
                              <input type="text" class="form-control">
                            </div>
                            <label for="inputEmail3" class="col-sm-2 col-form-label fw-normal">ชื่อวิชา(Optional)</label>
                            <div class="col-sm-4">
                              <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-2 bg-gray py-2">
                            <label for="inputEmail3" class="col-sm-2 col-form-label fw-normal">อาจารย์ผู้สอน (optional)</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3 bg-gray py-2">
                            <label for="inputEmail3" class="col-sm-12 col-form-label fw-normal">รายละเอียด:</label>
                            <div class="col-sm-12">
                                <div class="px-2 py-1 bg-white"><button type="button" class="btn btn-link text-orange p-0" data-bs-toggle="modal" data-bs-target="#pollModal"><i class="fas fa-poll fa-lg"></i></button></div>
                            </div>
                            <div class="col-sm-12">
                                <textarea rows="5" class="form-control" id="inputEmail3"></textarea>
                            </div>
                        </div>
                    </div>  
                  </div>
              </div>
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-orange rounded-pill btn-lg px-4">โพสต์</button>
            </div>
            </form>
        </div>
    </div>
    <?php require('inc_footer.php'); ?> 
<!-- Modal -->
<div class="modal fade" id="pollModal" tabindex="-1" aria-labelledby="pollModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form>  
        <div class="modal-content bg-lightGray">
          <div class="modal-header">
            <h5 class="modal-title" id="pollModalLabel">สร้างโพล</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row mb-3">
                <div class="col-sm-12">
                    <textarea rows="3" class="form-control" value="" placeholder="คำถาม"></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-12">
                  <label for="" class="col-form-label">รายละเอียดตัวเลือก</label>    
                  <input type="text" class="form-control mb-2" value="" placeholder="ตัวเลือกที่1">
                  <input type="text" class="form-control mb-2" value="" placeholder="ตัวเลือกที่2">
                  <input type="text" class="form-control mb-2" value="" placeholder="ตัวเลือกที่3">
                  <button type="button" class="btn btn-dark btn-sm"><i class="fas fa-plus"></i> เพิ่มตัวเลือก</button>    
                </div>
            </div> 
              <hr>
            <div class="row mb-2">
                <label for="inputEmail3" class="col-sm-3 col-form-label fw-normal">วันที่ปิดโพล</label>
                <div class="col-sm-8">
                  <input type="date" class="form-control">
                </div>
            </div> 
            <div class="row mb-2">
                <div class="col-sm-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                      <label class="form-check-label" for="defaultCheck1">
                        โหวตได้หลายตัวเลือก
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                      <label class="form-check-label" for="defaultCheck1">
                        อนุญาตให้ผู้อื่นเพิ่มตัวเลือก
                      </label>
                    </div>  
                </div>
            </div>  
          </div>
          <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-orange px-4 rounded-pill">สร้าง</button>
          </div>
        </div>
    </form>
  </div>
</div>    
</body>
</html>    