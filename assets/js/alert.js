const flashData = $(".flash-data").data("flash");
console.log(flashData);

if (flashData) {
	if (flashData == "simpan") {
		Swal.fire({
			icon: "success",
			title: "Berhasil!",
			text: "Data telah tersimpan",
		});
	}
}
