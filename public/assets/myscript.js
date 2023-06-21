$('.delete-user').click( function(){
    var username = $(this).attr('data-username');
    var name = $(this).attr('data-name');
    Swal.fire({
      title: 'Yakin ?',
      text: "Ingin menghapus data user "+name+" ? ",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Hapus'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location = "/user-delete/"+username+""
        Swal.fire(
          'Deleted!',
          'User Has Been Remove.',
          'success'
        )
      }
    })
  });

  $('.delete-skill').click( function(){
    var id = $(this).attr('data-id');
    var nama = $(this).attr('data-nama');
    Swal.fire({
      title: 'Yakin ?',
      text: "Ingin menghapus data Skill "+nama+" ? ",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Hapus'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location = "/skill-delete/"+id+""
        Swal.fire(
          'Deleted!',
          'Skill Has Been Remove.',
          'success'
        )
      }
    })
  });

  $('.delete-edu').click( function(){
    var id = $(this).attr('data-id');
    Swal.fire({
      title: 'Yakin ?',
      text: "Ingin menghapus data Education ini ? ",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Hapus'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location = "/education-delete/"+id+""
        Swal.fire(
          'Deleted!',
          'Education Has Been Remove.',
          'success'
        )
      }
    })
  });

  $('.delete-sertification').click( function(){
    var id = $(this).attr('data-id');
    var judul = $(this).attr('data-judul');
    Swal.fire({
      title: 'Yakin ?',
      text: "Ingin menghapus Sertifikasi "+judul+" ? ",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Hapus'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location = "/sertification-delete/"+id+""
        Swal.fire(
          'Deleted!',
          'Sertidication Has Been Remove.',
          'success'
        )
      }
    })
  });

  $('.delete-sosmed').click( function(){
    var id = $(this).attr('data-id');
    Swal.fire({
      title: 'Yakin ?',
      text: "Ingin menghapus Sosial Media ini ? ",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Hapus'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location = "/sosmed-delete/"+id+""
        Swal.fire(
          'Deleted!',
          'Social Media Has Been Remove.',
          'success'
        )
      }
    })
  });

  $('.delete-telp').click( function(){
    var id = $(this).attr('data-id');
    var telp = $(this).attr('data-telp');
    Swal.fire({
      title: 'Yakin ?',
      text: "Ingin menghapus No Telp "+telp+" ? ",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Hapus'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location = "/telp-delete/"+id+""
        Swal.fire(
          'Deleted!',
          'No Telp Has Been Remove.',
          'success'
        )
      }
    })
  });