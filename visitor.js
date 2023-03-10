const countEl = document.getElementById('res');

updateVisitCount();

function updateVisitCount() {
	fetch('https://api.countapi.xyz/update/herc/port/?amount=1')
	.then(res => res.json())
	.then(res => {
		countEl.innerHTML = res.value;
	})
}
