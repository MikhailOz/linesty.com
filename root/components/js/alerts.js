// CREATEELEMENT.JS SUPPOSED TO BE IMPORTED

class UpperAlertManager {
	constructor() {
		this.alertsContainer = document.getElementById('alerts');
	}

	closeUpperAlert(alert) {
		alert.classList.replace('top-0', 'top-[-50vh]');

		setTimeout(() => {
			alert.remove();
		}, 200);
	}

	closeAllUpperAlerts() {
		if (this.alertsContainer.childElementCount > 0) {
			const childElements = this.alertsContainer.children;

			for (let i = 0; i < childElements.length; i++) {
				const alert = childElements[i];
				this.closeUpperAlert(alert);
			}
		}
	}

	createSvgElement(tag, attributes) {
		const element = document.createElementNS('http://www.w3.org/2000/svg', tag);
		for (const [key, value] of Object.entries(attributes)) {
			element.setAttribute(key, value);
		}
		return element;
	}

	createElement(tag, attributes) {
		const element = document.createElement(tag);
		for (const [key, value] of Object.entries(attributes)) {
			element.setAttribute(key, value);
		}
		return element;
	}

	pushAnUpperAlert(status, value) {
		this.closeAllUpperAlerts();

		let color = '';
		if (status === 'error') {
			color = 'bg-crimsonRed';
		} else if (status === 'success') {
			color = 'bg-emeraldGreen';
		}

		const alert = this.createElement('div', {
			class: `flex justify-between gap-x-3 absolute top-[-50vh] transition-all duration-150 mx-5 py-1 px-3 rounded-lg ${color}`,
			role: 'alert',
		});

		const svg1 = this.createSvgElement('svg', {
			xmlns: 'http://www.w3.org/2000/svg',
			viewBox: '0 0 24 24',
			'stroke-width': '1.8',
			class: 'min-w-[22px] w-[22px] stroke-white fill-none',
		});
		const path1 = this.createSvgElement('path', {
			'stroke-linecap': 'round',
			'stroke-linejoin': 'round',
			d: 'M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z',
		});
		svg1.appendChild(path1);

		const message = this.createElement('p', {
			class: 'max-w-[450px] leading-5 break-words font-poppins text-base font-normal text-white sm:leading-6',
		});
		message.textContent = value;

		const svg2 = this.createSvgElement('svg', {
			xmlns: 'http://www.w3.org/2000/svg',
			viewBox: '0 0 24 24',
			'stroke-width': '1.75',
			class: 'min-w-[22px] w-[22px] cursor-pointer transition-opacity duration-75 stroke-white fill-none hover:opacity-70',
		});
		const path2 = this.createSvgElement('path', {
			'stroke-linecap': 'round',
			'stroke-linejoin': 'round',
			d: 'M6 18L18 6M6 6l12 12',
		});
		svg2.appendChild(path2);
		svg2.onclick = () => {
			this.closeUpperAlert(alert);
		};

		alert.appendChild(svg1);
		alert.appendChild(message);
		alert.appendChild(svg2);
		this.alertsContainer.appendChild(alert);

		setTimeout(() => {
			alert.classList.replace('top-[-50vh]', 'top-0');
		}, 50);
	}
}

const upperAlertManager = new UpperAlertManager();
