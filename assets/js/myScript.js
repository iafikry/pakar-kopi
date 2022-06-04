let prevPos = window.pageYOffset;
window.addEventListener("scroll", function () {
	let currentPos = window.pageYOffset;
	// console.log("Prev Pos");
	// console.log(prevPos);
	// console.log("===================");
	// console.log("current position");
	// console.log(currentPos);
	// console.log("===================");
	if (prevPos > currentPos) {
		document.getElementById("header").style.top = "0px";
		if (prevPos > 54) {
			document.getElementById("nav-menu").style.backgroundColor = "#084594";
			let txtLink = document.getElementsByClassName("nav-txt-link");
			for (let i = 0; i < txtLink.length; i++) {
				txtLink[i].style.color = "#FFFF";
			}
			$("#btnLogin").removeClass("text-white");
			$("#btnLogin").addClass("text-base bg-white");
		} else {
			document.getElementById("nav-menu").style.backgroundColor = "transparent";
			let txtLink = document.getElementsByClassName("nav-txt-link");
			for (let i = 0; i < txtLink.length; i++) {
				txtLink[i].style.color = "#fff";
			}
			$("#btnLogin").removeClass("text-base bg-white");
			$("#btnLogin").addClass("text-white");
		}
	} else {
		document.getElementById("header").style.top = "-110px";
	}
	prevPos = currentPos;
});

// const menuGejala = document.getElementById("menuGejala");
// menuGejala.addEventListener("click", function () {
// 	console.log("tambah class active di gejala");
// 	let link = document.getElementsByClassName("link-dark");
// 	for (let i = 0; i < link.length; i++) {
// 		if (link.classList.contains("active")) {
// 			link.classList.remove("active");
// 		}
// 	}
// 	menuGejala.classList.add("active");
// });

//tooltip
$(function () {
	$('[data-bs-toggle="tooltip"]').tooltip();
});

const iconVirus = document.getElementById("iconVirus");
iconVirus.addEventListener("mouseover", function () {
	iconVirus.style.transform = "translateY(-5%)";
	document.getElementById("cdGejala").style.transform = "translateY(0.59%)";
	let shadow = document.getElementById("sdwVirus");
	shadow.style.width = "90px";
});
iconVirus.addEventListener("mouseout", function () {
	iconVirus.style.removeProperty("transform");
	document.getElementById("cdGejala").style.removeProperty("transform");
	let shadow = document.getElementById("sdwVirus");
	shadow.style.removeProperty("width");
});

const iconKopi = document.getElementById("iconKopi");
iconKopi.addEventListener("mouseover", function () {
	iconKopi.style.transform = "translateY(-5%)";
	document.getElementById("cdPenyakit").style.transform = "translateY(0.59%)";
	let shadow = document.getElementById("sdwKopi");
	shadow.style.width = "90px";
});
iconKopi.addEventListener("mouseout", function () {
	iconKopi.style.removeProperty("transform");
	document.getElementById("cdPenyakit").style.removeProperty("transform");
	let shadow = document.getElementById("sdwKopi");
	shadow.style.removeProperty("width");
});

const iconBrainstorm = document.getElementById("iconBrainstorm");
iconBrainstorm.addEventListener("mouseover", function () {
	iconBrainstorm.style.transform = "translateY(-5%)";
	document.getElementById("cdMetode").style.transform = "translateY(0.59%)";
	let shadow = document.getElementById("sdwBrainstorm");
	shadow.style.width = "90px";
});
iconBrainstorm.addEventListener("mouseout", function () {
	iconBrainstorm.style.removeProperty("transform");
	document.getElementById("cdMetode").style.removeProperty("transform");
	let shadow = document.getElementById("sdwBrainstorm");
	shadow.style.removeProperty("width");
});

const linkPenyakit = document.getElementById("linkPenyakit");
linkPenyakit.addEventListener("click", function () {
	const tabPenyakit = document.getElementById("tabPenyakit");
	const tabMetode = document.getElementById("tabMetode");
	const tabGejala = document.getElementById("tabGejala");
	if (tabGejala.classList.contains("active")) {
		console.log("tab gejala hilang");
		tabGejala.classList.remove("active");
		document.getElementById("gejala").classList.remove("show", "active");
	}
	if (tabMetode.classList.contains("active")) {
		console.log("tab metode hilang");
		tabMetode.classList.remove("active");
		document.getElementById("metode").classList.remove("show", "active");
	}
	if (!tabPenyakit.classList.contains("active")) {
		tabPenyakit.classList.add("active");
		console.log("tab penyakit muncul");
		document.getElementById("penyakit").classList.add("show", "active");
	}
});

const linkGejala = document.getElementById("linkGejala");
linkGejala.addEventListener("click", function () {
	const tabPenyakit = document.getElementById("tabPenyakit");
	const tabMetode = document.getElementById("tabMetode");
	const tabGejala = document.getElementById("tabGejala");
	if (tabPenyakit.classList.contains("active")) {
		console.log("tab penyakit hilang");
		tabPenyakit.classList.remove("active");
		document.getElementById("penyakit").classList.remove("show", "active");
	}
	if (tabMetode.classList.contains("active")) {
		console.log("tab metode hilang");
		tabMetode.classList.remove("active");
		document.getElementById("metode").classList.remove("show", "active");
	}
	tabGejala.classList.add("active");
	console.log("tab gejala muncul");
	document.getElementById("gejala").classList.add("show", "active");
});

const linkMetode = document.getElementById("linkMetode");
linkMetode.addEventListener("click", function () {
	const tabPenyakit = document.getElementById("tabPenyakit");
	const tabMetode = document.getElementById("tabMetode");
	const tabGejala = document.getElementById("tabGejala");
	if (tabPenyakit.classList.contains("active")) {
		console.log("tab penyakit hilang");
		tabPenyakit.classList.remove("active");
		document.getElementById("penyakit").classList.remove("show", "active");
	}
	if (tabGejala.classList.contains("active")) {
		console.log("tab metode hilang");
		tabGejala.classList.remove("active");
		document.getElementById("gejala").classList.remove("show", "active");
	}
	if (!tabMetode.classList.contains("active")) {
		tabMetode.classList.add("active");
		console.log("tab metode muncul");
		document.getElementById("metode").classList.add("show", "active");
	}
});

// const btnNext = document.getElementById("btnNext");
// btnNext.addEventListener("click", function () {
// 	btnNext.hidden = true;
// 	document.getElementById("btnPrev").removeAttribute("hidden");
// });

// const btnPrev = document.getElementById("btnPrev");
// btnPrev.addEventListener("click", function () {
// 	btnPrev.hidden = true;
// 	document.getElementById("btnNext").removeAttribute("hidden");
// });

const selectPenyakit = document.getElementById("selectPenyakit");
selectPenyakit.addEventListener("change", function () {
	const penyakit = selectPenyakit.value;
	// console.log(penyakit);
	const btnNext = document.getElementById("btnNextPrev");
	if (penyakit != 0) {
		if (btnNext.hasAttribute("disabled")) {
			btnNext.removeAttribute("disabled");
		}
	} else {
		btnNext.disabled = true;
	}
	ambilRule(penyakit);
});

function ambilRule(kodePenyakit) {
	// console.log("function ambil rule = " + kodePenyakit);
	let kesini = "http://localhost/pakar-kopi/welcome/ambilRule/" + kodePenyakit;
	$.ajax({
		type: "GET",
		data: "",
		url: kesini,
		success: function (result) {
			let content = "";
			$("#listGejala").empty();
			let dataObject = JSON.parse(result);
			$.each(dataObject, function (i, data) {
				content += `<li class="list-group-item"><input type="checkbox" class="form-check-input me-1" name="gejala${i}" value=${data.kode_gejala}>Apakah ${data.nama_gejala}?</li>`;
			});
			$("#listGejala").html(content);
		},
	});
}

const btnNextPrev = document.getElementById("btnNextPrev");
btnNextPrev.addEventListener("click", function () {
	let val = btnNextPrev.getAttribute("data-bs-slide");
	// console.log(val);
	if (val == "next") {
		btnNextPrev.setAttribute("data-bs-slide", "prev");
		btnNextPrev.innerHTML = "Prev";
	} else {
		btnNextPrev.setAttribute("data-bs-slide", "next");
		btnNextPrev.innerHTML = "Next";
	}
});

function submitDiagnosis() {
	document.getElementById("myForm1").submit();
	// document.getElementById("myForm2").submit();
	setTimeOut(function () {
		document.getElementById("myForm2").submit();
	}, 5000);
}

$(".carousel").carousel({
	interval: false,
});
