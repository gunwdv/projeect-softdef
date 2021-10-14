/* eslint-disable jsx-a11y/anchor-has-content */
/* eslint-disable jsx-a11y/anchor-is-valid */
import './header.css';
import {FaEdit ,FaBell,FaSearch,FaThLarge,FaBars} from "react-icons/fa";
import {IoMdArrowDropdown} from "react-icons/io";
function AppHeader(){
    return(
        <header>
        <nav>
            <div className="navbar">
                <div className="logo">
                    <a href="#">eletiva</a>
                </div>
                
                  <ul>
                    <li>
                        <div className="tabbar">
                            <FaEdit  className="fas"/>
                            <a href="#">สร้างโพสต์</a>
                        </div>
                        <div className="tabbar">
                            <FaBell  className="fas"/>
                            <a href="#">แจ้งเตือน</a>
                        </div>             
                        <div className="tabbar">
                            <FaSearch className="fas"/>
                            <a href="#">ค้นหา</a>
                        </div>
                        <div className="tabbar">
                            <FaThLarge className="fas"/>
                            <a href="#">หมวดหมู่</a>
                        </div>
                    </li>
                 <div className="btn" >
                   <div className="dropdown">
                        <button>โปรไฟล์<IoMdArrowDropdown className="io"/></button>
                   <div className="drop-login">
                            <a href="#">หน้าของฉัน</a>
                            <a href="#">โพสของฉัน</a>
                            <a href="#">ตั้งค่าบัญชี</a>
                            <a href="#">Log out</a>
                    </div>
                   </div>
               </div>
                  </ul> 
         <div className="menubar">
             <FaBars className="fas"/>
        </div>
       </div>
    </nav>
    </header>
    )
}
export default AppHeader;