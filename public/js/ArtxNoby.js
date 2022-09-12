class Confirm{
  constructor(data){
    this.data=data;
  }
  getConfirm(){
    Swal.fire({
    title: this.data.judul,
    text: this.data.teks,
    icon: this.data.icon,
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: this.data.confirmText,
    }).then((result) => {
    if (result.isConfirmed) {
      document.location.href=this.data.tujuan;
      }
    });
  }
}

/******************************/
/* MADE WITH STUDENT PROJECT */
/*****************************/