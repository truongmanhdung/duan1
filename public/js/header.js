function Header() {
    return `
        <header class="_header py-3 d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <a class="logo" href="../index.html">
                    <svg>
                        <symbol id="s-text"><text text-anchor="middle" x="50%" y="80%">BOOKING</text></symbol>
                        <use class="logo-text" xlink:href="#s-text"></use>
                        <use class="logo-text" xlink:href="#s-text"></use>
                        <use class="logo-text" xlink:href="#s-text"></use>
                        <use class="logo-text" xlink:href="#s-text"></use>
                        <use class="logo-text" xlink:href="#s-text"></use>
                    </svg>
                </a>
                <form action="" method="get" class="ms-2 d-flex form-search">
                    <div class="position-relative me-2 border-end">
                        <input type="text" placeholder="Tìm kiếm" class="input-search" name="search" autocomplete="off">
                        <i class="fas fa-search position-absolute icon-search px-2 text-secondary"></i>
                    </div>
                    <input type="text" name="datefilter" placeholder="Ngày" class="input-date" autocomplete="off" />
                    <button type="submit" class="btn-search"><i class="text-white fs-6 fas fa-search"></i></button>
                </form>
            </div>
            <nav class="_menu">
                <ul class="m-0">
                    <li><a href="#">Đối tác</a></li>
                    <li><a href="../components/dangky.html">Đăng ký</a></li>
                    <li><a href="../components/dangnhap.html">Đăng nhập</a></li>
                </ul>
            </nav>
        </header>`;
}

const header = document.querySelector('#header');
header.innerHTML = Header();