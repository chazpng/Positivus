/** @type {import('tailwindcss').Config} */
module.exports = {
	content: [
		"./*.{php,html,js}",
		"./acf/**/*.{php,html,js}",
		"./frontend/**/*.{php,html,js}",
		"./template-parts/*.{php,html,js}"
	],
	theme: {
		extend: {},
	},
	plugins: [],
}