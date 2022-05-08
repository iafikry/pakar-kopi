const flashData = $(".flash-data").data("flash");
console.log(flashData);

if (flashData) {
	if (flashData == "simpan") {
		Swal.fire({
			icon: "success",
			title: "Berhasil!",
			text: "Data telah tersimpan",
		});
	} else if (flashData == "hapus") {
		Swal.fire({
			icon: "success",
			title: "Berhasil!",
			text: "Data telah terhapus",
		});
	}
}

//khusus hapus data
$(".btn-hapus").on("click", function (e) {
	e.preventDefault();
	const href = $(this).attr("href");
	Swal.fire({
		title: "Hapus data?",
		text: "",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#495057",
		cancelButtonColor: "#2666cf",
		cancelButtonText: "Tidak",
		confirmButtonText: "Ya",
		focusCancel: true,
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	});
});
