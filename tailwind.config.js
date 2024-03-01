const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

function rem2px(input, fontSize = 16) {
  if (input == null) {
    return input;
  }
  switch (typeof input) {
    case 'object':
      if (Array.isArray(input)) {
        return input.map((val) => rem2px(val, fontSize));
      }
      const ret = {};
      for (const key in input) {
        ret[key] = rem2px(input[key], fontSize);
      }
      return ret;
    case 'string':
      return input.replace(
        /(\d*\.?\d+)rem$/,
        (_, val) => `${parseFloat(val) * fontSize}px`,
      );
    case 'function':
      return eval(input.toString().replace(
        /(\d*\.?\d+)rem/g,
        (_, val) => `${parseFloat(val) * fontSize}px`,
      ));
    default:
      return input;
  }
}

/** @type {import('tailwindcss').Config} */
module.exports = {
	content: [
		"./*.{php,html,js}",
		"./acf/**/*.{php,html,js}",
		"./frontend/**/*.{php,html,js}",
		"./template-parts/*.{php,html,js}"
	],
	mode: 'jit',
	safelist: [
    'px-6',
    'py-8',
    'py-6',
    'basis-full',
    'inset-y-0',
    'text-gray-900',
    'divide-gray-500/25',
    'divide-gray-500/10',
    'grow',
    '-mx-3',
    'px-4',
    'lg:basis-unset',
    'lg:px-8',
    'lg:hidden',
    'lg:flex-1',
    'sm:ring-1',
    'sm:ring-gray-900/10',
    'sm:ring-white/10',
    'lg:justify-normal',
	],
	theme: {
		fontFamily: {
      sans: ['Graphik', 'sans-serif'],
      serif: ['Merriweather', 'serif'],
      sans: ['Inter', ...defaultTheme.fontFamily.sans],
    },
    extend: {
      colors: {
        ...colors,
      },
      fontSize: {
        'fluid-1': 'clamp(20px, calc(1.48rem + 2.03vw), 60px)',
        'fluid-2': 'clamp(3.27rem, calc(2.31rem + 4.79vw), 5.72rem)',
        'main' : '36px',
      },
      spacing: {
        ...rem2px(defaultTheme.spacing),
        '600': '600px',
        '8xl': '96rem',
        '9xl': '128rem',
      },
      margin: {
        ...rem2px(defaultTheme.spacing),
        '160px': '160px',
      },
      borderRadius: {
        '4xl': '2rem',
      },
      minHeight: (theme) => ({
        ...theme('spacing'),
      }),
      flexBasis: {
        'unset': 'unset'
      }
    }
	},
	plugins: ['postcss-import', 'tailwindcss'],
}
