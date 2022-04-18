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

const btnNext = document.getElementById("btnNext");
btnNext.addEventListener("click", function () {
	btnNext.hidden = true;
	document.getElementById("btnPrev").removeAttribute("hidden");
});

const btnPrev = document.getElementById("btnPrev");
btnPrev.addEventListener("click", function () {
	btnPrev.hidden = true;
	document.getElementById("btnNext").removeAttribute("hidden");
});

const selectPenyakit = document.getElementById("selectPenyakit");
selectPenyakit.addEventListener("change", function () {
	const penyakit = selectPenyakit.value;
	console.log(penyakit);
	const btnNext = document.getElementById("btnNext");
	if (penyakit != 0) {
		if (btnNext.hasAttribute("disabled")) {
			btnNext.removeAttribute("disabled");
		}
	} else {
		btnNext.disabled = true;
	}
});

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
			document.getElementById("nav-menu").style.backgroundColor = "#42C2FF";
			let txtLink = document.getElementsByClassName("nav-txt-link");
			for (let i = 0; i < txtLink.length; i++) {
				txtLink[i].style.color = "#FFFF";
			}
		} else {
			document.getElementById("nav-menu").style.backgroundColor = "transparent";
			let txtLink = document.getElementsByClassName("nav-txt-link");
			for (let i = 0; i < txtLink.length; i++) {
				txtLink[i].style.color = "#1e272e";
			}
		}
	} else {
		document.getElementById("header").style.top = "-60px";
	}
	prevPos = currentPos;
});

$(".carousel").carousel({
	interval: false,
});
