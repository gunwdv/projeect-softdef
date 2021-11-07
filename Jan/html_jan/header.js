class header extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `
                <header>
                <nav>
                    <div class="navbar">
                        <div class="logo">
                            <a href="#">eletiva</a>
                        </div>

                        <ul>
                            <li>
                                <div class="tabbar">
                                    <i class="fas fa-edit"></i>
                                    <a href="#">สร้างโพสต์</a>
                                </div>
                                <div class="tabbar">
                                    <i class="fas fa-bell"></i>
                                    <a href="#">แจ้งเตือน</a>
                                </div>
                                <div class="tabbar">
                                    <i class="fas fa-search"></i>
                                    <a href="#">ค้นหา</a>
                                </div>
                                <div class="tabbar">
                                    <i class="fas fa-th-large"></i>
                                    <a href="#">หมวดหมู่</a>
                                </div>
                            </li>
                            <div class="btn">
                                <div class="dropdown">
                                    <button class="clickProfile">โปรไฟล์<i class="fas fa-caret-down"></i></button>
                                    <div class="drop-login">
                                        <a href="#">หน้าของฉัน</a>
                                        <a href="#">โพสของฉัน</a>
                                        <a href="#">ตั้งค่าบัญชี</a>
                                        <a href="#">Log out</a>
                                    </div>
                                </div>
                            </div>
                        </ul>
                        <div class="menubar">
                            <i class="fas fa-bars"></i>
                        </div>
                    </div>
                </nav>
            </header>

        `
    }
}