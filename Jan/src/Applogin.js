/* eslint-disable jsx-a11y/anchor-is-valid */
/* eslint-disable jsx-a11y/alt-text */
import { FaUserAlt , FaUnlockAlt, FaEye } from "react-icons/fa";
import './login.css';

function Applogin(){
    return(
       
      <div className="form-login">

       <div className="flex-login">
            <div className="img-login">
                <img src="/image/image 6.png"/>
            </div>

            <div className= "login">
              <div className="form-text">
                <h2>เข้าสู่ระบบ</h2>
                
                <div className="text-login">
                    <FaUserAlt className="icon" />
                    <input type="text"  name="username" id="username" placeholder="ชื่อผู้ใช้"/>
                </div>

                <div className="text-login">
                    <FaUnlockAlt className="icon-lock" />
                    <input type="password" name="password" id="password" placeholder="รหัสผ่าน"/>
                    <span><FaEye className="eye"/></span>
                </div>

                <div className="forgot-pwd">
                    <a href="#">ลืมรหัสผ่าน?</a>
                </div>

                <div className="btn-login">
                   <input type="submit" value="เข้าสู่ระบบ"/>
                </div>
                
                <div className="register">
                 <p>ยังไม่ได้เป็นสมาชิก? <a href="#">คลิกเพื่อสมัคร</a></p>
                </div>
	            
             </div>
                </div>
               
            </div> 
           
        </div>
    );
}
export default Applogin;
