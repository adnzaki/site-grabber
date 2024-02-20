const showMessage = () => {
  const myModal = new bootstrap.Modal("#messageModal", {
    keyboard: false,
  });

  myModal.show();
};

const callMe = () => {
  window.open("https://api.whatsapp.com/send?phone=6285173199492", "_blank");
};
