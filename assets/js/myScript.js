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
		} else {
			document.getElementById("nav-menu").style.backgroundColor = "transparent";
			let txtLink = document.getElementsByClassName("nav-txt-link");
			for (let i = 0; i < txtLink.length; i++) {
				txtLink[i].style.color = "#fff";
			}
		}
	} else {
		document.getElementById("header").style.top = "-110px";
	}
	prevPos = currentPos;
});

const menuGejala = document.getElementById("menuGejala");
menuGejala.addEventListener("click", function () {
	console.log("tambah class active di gejala");
	let link = document.getElementsByClassName("link-dark");
	for (let i = 0; i < link.length; i++) {
		if (link.classList.contains("active")) {
			link.classList.remove("active");
		}
	}
	menuGejala.classList.add("active");
});

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

const linkGejala = document.getElementById("linkGejala");
linkGejala.addEventListener("click", function () {
	const tabPenyakit = document.getElementById("tabPenyakit");
	const tabMetode = document.getElementById("tabMetode");
	const tabGejala = document.getElementById("tabGejala");
	if (tabPenyakit.classList.contains("active")) {
		// console.log("tab penyakit hilang");
		tabPenyakit.classList.remove("active");
		document.getElementById("penyakit").classList.remove("show", "active");
	}
	if (tabMetode.classList.contains("active")) {
		// console.log("tab metode hilang");
		tabMetode.classList.remove("active");
		document.getElementById("metode").classList.remove("show", "active");
	}
	tabGejala.classList.add("active");
	// console.log("tab gejala muncul");
	document.getElementById("gejala").classList.add("show", "active");
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
	console.log(penyakit);
	const btnNext = document.getElementById("btnNextPrev");
	if (penyakit != 0) {
		if (btnNext.hasAttribute("disabled")) {
			btnNext.removeAttribute("disabled");
		}
	} else {
		btnNext.disabled = true;
	}
});

const btnNextPrev = document.getElementById("btnNextPrev");
btnNextPrev.addEventListener("click", function () {
	let val = btnNextPrev.getAttribute("data-bs-slide");
	console.log(val);
	if (val == "next") {
		btnNextPrev.setAttribute("data-bs-slide", "prev");
		btnNextPrev.innerHTML = "Prev";
	} else {
		btnNextPrev.setAttribute("data-bs-slide", "next");
		btnNextPrev.innerHTML = "Next";
	}
});

$(".carousel").carousel({
	interval: false,
});
