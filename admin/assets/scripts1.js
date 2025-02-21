document.getElementById('update-stats').addEventListener('click', () => {
    // Giả lập dữ liệu từ server
    const stats = {
      revenue: 1500000 + Math.floor(Math.random() * 500000), // Doanh thu ngẫu nhiên
      availableRooms: Math.floor(Math.random() * 20),
      bookedRooms: Math.floor(Math.random() * 30),
    };
  
    // Cập nhật giao diện
    updateStat('revenue', stats.revenue);
    updateStat('available-rooms', stats.availableRooms);
    updateStat('booked-rooms', stats.bookedRooms);
  });
  
  function updateStat(id, newValue) {
    const element = document.getElementById(id);
  
    // Đổi giá trị
    if (id === 'revenue') {
      element.innerText = new Intl.NumberFormat('vi-VN', {
        style: 'currency',
        currency: 'VND',
      }).format(newValue);
    } else {
      element.innerText = newValue;
    }
  
    // Thêm hiệu ứng
    element.classList.add('updated');
    setTimeout(() => {
      element.classList.remove('updated');
    }, 500);
  }
  