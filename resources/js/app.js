AOS.init({
    offset: 120,          // khoảng cách px từ khi phần tử vào viewport
    delay: 0,             // độ trễ trước khi bắt đầu (ms)
    duration: 800,        // thời gian animation (ms) => càng lớn càng mượt
    easing: 'ease-in-out',// kiểu easing (có thể: ease, linear, ease-in, ease-out, ease-in-out, cubic-bezier...)
    once: true,           // chỉ chạy 1 lần (true) hoặc chạy lại khi scroll lên xuống (false)
    mirror: false,        // có animate khi scroll ngược lại không
    anchorPlacement: 'top-bottom', // vị trí phần tử so với viewport để trigger
});
