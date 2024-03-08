<?php
/**
 * Features Section.
 *
 * ACF Features.
 *
 * @link https://github.com/StoutLogic/acf-builder/wiki
 *
 * @package greydientlab
 */

$features = new StoutLogic\AcfBuilder\FieldsBuilder( 'features' );
$features
	->addSelect(
		'features_style',
		array(
			'default_value' => 'simple',
		)
	)
	->addChoices(
		array( 'product' => 'Product' ),
		array( 'simple' => 'Simple' )
	)

	->addSelect(
		'panel_type',
		array(
			'default_value' => 'none',
		)
	)
		->conditional( 'features_style', '==', 'product' )
		->addChoices(
			array( 'none' => 'None' ),
			array( 'contained-panel' => 'Contained in Panel' ),
			array( 'featured-panel' => 'Featured in Panel' )
		)

	->addTrueFalse(
		'add_link',
		array(
			'default_value' => 0,
		)
	)
		->conditional( 'features_style', '==', 'product' )

	->addText( 'link_text' )
		->conditional( 'add_link', '==', 1 )

		->addPageLink( 'page_link' )
			->conditional( 'add_link', '==', 1 )

	->addText( 'label' )
	->addText( 'title' )
	->addTextarea( 'description' )

	->addImage(
		'featured_image',
		array(
			'preview_size'  => 'medium',
			'label'         => __( 'Featured Image', 'greydientlab' ),
			'return_format' => 'id',
		)
	)
		->conditional( 'features_style', '==', 'product' )
			->and( 'use_wysiwyg', '==', 0 )
		->or( 'features_style', '==', 'simple' )

	->addSelect(
		'list_column_style',
		array(
			'default_value' => '2',
		)
	)
		->conditional( 'features_style', '!=', 'product' )
		->addChoices(
			array( 'two-inline' => 'Two (Inline Layout)' ),
			array( 'two-block' => 'Two (Block Layout)' ),
			array( 'three-inline' => 'Three (Inline Layout)' ),
			array( 'three-block' => 'Three (Block Layout)' ),
			array( 'three-icon-block' => 'Three (Icon Block)' ),
			array( 'six-block' => 'Six (Block Layout)' ),
			array( 'six-icon-block' => 'Six (Inline Icon)' ),
			array( 'offset-inline' => 'Offset (Inline Icon)' ),
			array( 'offset-block' => 'Offset (Offset Block)' )
		)

	->addRepeater( 'list' )
		->conditional( 'features_style', '==', 'product' )
		->or( 'features_style', '==', 'simple' )

		->addImage(
			'list_icon',
			array(
				'preview_size'  => 'medium',
				'label'         => __( 'List Icon', 'greydientlab' ),
				'return_format' => 'id',
			)
		)
		->addText( 'list_title' )
		->addTextArea( 'list_description' )

		->addTrueFalse(
			'is_external_link',
			array(
				'default_value' => 0,
			)
		)
		->addText( 'link_text' )
		->addUrl( 'url' )
			->conditional( 'is_external_link', '==', 1 )
		->addPageLink( 'page_link' )
			->conditional( 'is_external_link', '==', 0 )
	->endRepeater()

	->addTrueFalse(
		'add_testimonial'
	)

	->addGroup( 'testimonial' )
		->conditional( 'add_testimonial', '==', 1 )
		->addTextarea( 'quote' )
		->addText( 'name' )
		->addText( 'position' )
		->addImage(
			'avatar',
			array(
				'preview_size'  => 'medium',
				'label'         => __( 'Avatar Image', 'greydientlab' ),
				'return_format' => 'id',
			)
		)
	->endGroup()

	->addTrueFalse(
		'use_wysiwyg',
		array(
			'default_value' => 0,
		)
	)
		->conditional( 'features_style', '!=', 'simple' )
		->and( 'panel_type', '==', 'featured-panel' )

	->addTextArea(
		'html_code'
	)
		->conditional( 'use_wysiwyg', '==', 1 )
		
		->addSelect(
			'language',
			array(
				'default_value' => 'javascript',
				'ui'            => 1,
			)
		)
		->conditional( 'use_wysiwyg', '==', 1 )
		->addChoices(
			array( '4cs' => 'GADV 4CS' ),
			array( '6502acme' => 'MOS 6502 (6510) ACME Cross Assembler format' ),
			array( '6502kickass' => 'MOS 6502 (6510) Kick Assembler format' ),
			array( '6502tasm' => 'MOS 6502 (6510) TASM/64TASS 1.46 Assembler format' ),
			array( '68000devpac' => 'Motorola 68000 - HiSoft Devpac ST 2 Assembler format' ),
			array( 'abap' => 'ABAP' ),
			array( 'actionscript' => 'ActionScript' ),
			array( 'actionscript3' => 'ActionScript 3' ),
			array( 'ada' => 'Ada' ),
			array( 'aimms' => 'AIMMS3' ),
			array( 'algol68' => 'ALGOL 68' ),
			array( 'apache' => 'Apache configuration' ),
			array( 'applescript' => 'AppleScript' ),
			array( 'apt_sources' => 'Apt sources' ),
			array( 'arm' => 'ARM ASSEMBLER' ),
			array( 'asm' => 'ASM' ),
			array( 'asp' => 'ASP' ),
			array( 'asymptote' => 'asymptote' ),
			array( 'autoconf' => 'Autoconf' ),
			array( 'autohotkey' => 'Autohotkey' ),
			array( 'autoit' => 'AutoIt' ),
			array( 'avisynth' => 'AviSynth' ),
			array( 'awk' => 'awk' ),
			array( 'bascomavr' => 'BASCOM AVR' ),
			array( 'bash' => 'Bash' ),
			array( 'basic4gl' => 'Basic4GL' ),
			array( 'batch' => 'Windows Batch file' ),
			array( 'bf' => 'Brainfuck' ),
			array( 'biblatex' => 'BibTeX' ),
			array( 'bibtex' => 'BibTeX' ),
			array( 'blitzbasic' => 'BlitzBasic' ),
			array( 'bnf' => 'bnf' ),
			array( 'boo' => 'Boo' ),
			array( 'c' => 'C' ),
			array( 'c_loadrunner' => 'C (LoadRunner)' ),
			array( 'c_mac' => 'C (Mac)' ),
			array( 'c_winapi' => 'C (WinAPI)' ),
			array( 'caddcl' => 'CAD DCL' ),
			array( 'cadlisp' => 'CAD Lisp' ),
			array( 'ceylon' => 'Ceylon' ),
			array( 'cfdg' => 'CFDG' ),
			array( 'cfm' => 'ColdFusion' ),
			array( 'chaiscript' => 'ChaiScript' ),
			array( 'chapel' => 'Chapel' ),
			array( 'cil' => 'CIL' ),
			array( 'clojure' => 'Clojure' ),
			array( 'cmake' => 'CMake' ),
			array( 'cobol' => 'COBOL' ),
			array( 'coffeescript' => 'CoffeeScript' ),
			array( 'cpp' => 'C++' ),
			array( 'cpp-qt' => 'C++ (Qt)' ),
			array( 'cpp-winapi' => 'C++ (WinAPI)' ),
			array( 'csharp' => 'C#' ),
			array( 'css' => 'CSS' ),
			array( 'cuesheet' => 'Cuesheet' ),
			array( 'd' => 'D' ),
			array( 'dart' => 'Dart' ),
			array( 'dcl' => 'DCL' ),
			array( 'dcpu16' => 'DCPU-16 Assembly' ),
			array( 'dcs' => 'DCS' ),
			array( 'delphi' => 'Delphi' ),
			array( 'diff' => 'Diff' ),
			array( 'div' => 'DIV' ),
			array( 'dos' => 'DOS' ),
			array( 'dot' => 'dot' ),
			array( 'e' => 'E' ),
			array( 'ecmascript' => 'ECMAScript' ),
			array( 'eiffel' => 'Eiffel' ),
			array( 'email' => 'eMail (mbox)' ),
			array( 'epc' => 'EPC' ),
			array( 'erlang' => 'Erlang' ),
			array( 'euphoria' => 'Euphoria' ),
			array( 'ezt' => 'EZT' ),
			array( 'f1' => 'Formula One' ),
			array( 'falcon' => 'Falcon' ),
			array( 'fo' => 'FO (abas-ERP)' ),
			array( 'fortran' => 'Fortran' ),
			array( 'freebasic' => 'FreeBasic' ),
			array( 'freeswitch' => 'FreeSWITCH' ),
			array( 'fsharp' => 'F#' ),
			array( 'gambas' => 'GAMBAS' ),
			array( 'gdb' => 'GDB' ),
			array( 'genero' => 'genero' ),
			array( 'genie' => 'Genie' ),
			array( 'gettext' => 'GNU Gettext' ),
			array( 'glsl' => 'glSlang' ),
			array( 'gml' => 'GML' ),
			array( 'gnuplot' => 'Gnuplot' ),
			array( 'go' => 'Go' ),
			array( 'groovy' => 'Groovy' ),
			array( 'gwbasic' => 'GwBasic' ),
			array( 'haskell' => 'Haskell' ),
			array( 'haxe' => 'Haxe' ),
			array( 'hicest' => 'HicEst' ),
			array( 'hq9plus' => 'HQ9+' ),
			array( 'html4strict' => 'HTML' ),
			array( 'html5' => 'HTML5' ),
			array( 'icon' => 'Icon' ),
			array( 'idl' => 'Uno Idl' ),
			array( 'ini' => 'INI' ),
			array( 'inno' => 'Inno' ),
			array( 'intercal' => 'INTERCAL' ),
			array( 'io' => 'Io' ),
			array( 'ispfpanel' => 'ISPF Panel' ),
			array( 'j' => 'J' ),
			array( 'java' => 'Java' ),
			array( 'java5' => 'Java(TM) 2 Platform Standard Edition 5.0' ),
			array( 'javascript' => 'Javascript' ),
			array( 'jcl' => 'JCL' ),
			array( 'jquery' => 'jQuery' ),
			array( 'julia' => 'Julia' ),
			array( 'kixtart' => 'KiXtart' ),
			array( 'klonec' => 'KLone C' ),
			array( 'klonecpp' => 'KLone C++' ),
			array( 'kotlin' => 'Kotlin' ),
			array( 'latex' => 'LaTeX' ),
			array( 'lb' => 'Liberty BASIC' ),
			array( 'ldif' => 'LDIF' ),
			array( 'lisp' => 'Lisp' ),
			array( 'llvm' => 'LLVM Intermediate Representation' ),
			array( 'locobasic' => 'Locomotive Basic' ),
			array( 'logtalk' => 'Logtalk' ),
			array( 'lolcode' => 'LOLcode' ),
			array( 'lotusformulas' => 'Lotus Notes @Formulas' ),
			array( 'lotusscript' => 'LotusScript' ),
			array( 'lscript' => 'LScript' ),
			array( 'lsl2' => 'LSL2' ),
			array( 'lua' => 'Lua' ),
			array( 'm68k' => 'Motorola 68000 Assembler' ),
			array( 'magiksf' => 'MagikSF' ),
			array( 'make' => 'GNU make' ),
			array( 'mapbasic' => 'MapBasic' ),
			array( 'mathematica' => 'Mathematica' ),
			array( 'matlab' => 'Matlab M' ),
			array( 'mercury' => 'Mercury' ),
			array( 'metapost' => 'MetaPost' ),
			array( 'mirc' => 'mIRC Scripting' ),
			array( 'mk-61' => 'МК-61/52' ),
			array( 'mmix' => 'MMIX' ),
			array( 'modula2' => 'Modula-2' ),
			array( 'modula3' => 'Modula-3' ),
			array( 'mpasm' => 'Microchip Assembler' ),
			array( 'mxml' => 'MXML' ),
			array( 'mysql' => 'MySQL' ),
			array( 'nagios' => 'Nagios' ),
			array( 'netrexx' => 'NetRexx' ),
			array( 'newlisp' => 'newlisp' ),
			array( 'nginx' => 'nginx' ),
			array( 'nimrod' => 'Nimrod' ),
			array( 'nsis' => 'NSIS' ),
			array( 'oberon2' => 'Oberon-2' ),
			array( 'objc' => 'Objective-C' ),
			array( 'objeck' => 'Objeck Programming Language' ),
			array( 'ocaml' => 'OCaml' ),
			array( 'ocaml-brief' => 'OCaml (brief)' ),
			array( 'octave' => 'GNU/Octave' ),
			array( 'oobas' => 'OpenOffice.org Basic' ),
			array( 'oorexx' => 'ooRexx' ),
			array( 'oracle11' => 'Oracle 11 SQL' ),
			array( 'oracle8' => 'Oracle 8 SQL' ),
			array( 'oxygene' => 'Oxygene' ),
			array( 'oz' => 'OZ' ),
			array( 'parasail' => 'ParaSail' ),
			array( 'parigp' => 'PARI/GP' ),
			array( 'pascal' => 'Pascal' ),
			array( 'pcre' => 'PCRE' ),
			array( 'per' => 'per' ),
			array( 'perl' => 'Perl' ),
			array( 'perl6' => 'Perl 6' ),
			array( 'pf' => 'OpenBSD Packet Filter' ),
			array( 'phix' => 'Phix' ),
			array( 'php' => 'PHP' ),
			array( 'php-brief' => 'PHP (brief)' ),
			array( 'pic16' => 'PIC16' ),
			array( 'pike' => 'Pike' ),
			array( 'pixelbender' => 'Pixel Bender 1.0' ),
			array( 'pli' => 'PL/I' ),
			array( 'plsql' => 'PL/SQL' ),
			array( 'postgresql' => 'PostgreSQL' ),
			array( 'postscript' => 'PostScript' ),
			array( 'povray' => 'POVRAY' ),
			array( 'powerbuilder' => 'PowerBuilder' ),
			array( 'powershell' => 'PowerShell' ),
			array( 'proftpd' => 'ProFTPd configuration' ),
			array( 'progress' => 'Progress' ),
			array( 'prolog' => 'Prolog' ),
			array( 'properties' => 'PROPERTIES' ),
			array( 'providex' => 'ProvideX' ),
			array( 'purebasic' => 'PureBasic' ),
			array( 'pycon' => 'Python (console mode)' ),
			array( 'pys60' => 'Python for S60' ),
			array( 'python' => 'Python' ),
			array( 'q' => 'q/kdb+' ),
			array( 'qbasic' => 'QBasic/QuickBASIC' ),
			array( 'qml' => 'QML' ),
			array( 'racket' => 'Racket' ),
			array( 'rails' => 'Rails' ),
			array( 'rbs' => 'RBScript' ),
			array( 'rebol' => 'REBOL' ),
			array( 'reg' => 'Microsoft Registry' ),
			array( 'rexx' => 'rexx' ),
			array( 'robots' => 'robots.txt' ),
			array( 'roff' => 'roff' ),
			array( 'rpmspec' => 'RPM Specification File' ),
			array( 'rsplus' => 'R / S+' ),
			array( 'ruby' => 'Ruby' ),
			array( 'rust' => 'Rust' ),
			array( 'sas' => 'SAS' ),
			array( 'sass' => 'Sass' ),
			array( 'scala' => 'Scala' ),
			array( 'scheme' => 'Scheme' ),
			array( 'scilab' => 'SciLab' ),
			array( 'scl' => 'SCL' ),
			array( 'sdlbasic' => 'sdlBasic' ),
			array( 'smalltalk' => 'Smalltalk' ),
			array( 'smarty' => 'Smarty' ),
			array( 'spark' => 'SPARK' ),
			array( 'sparql' => 'SPARQL' ),
			array( 'sql' => 'SQL' ),
			array( 'sshconfig' => 'sshconfig' ),
			array( 'standardml' => 'StandardML' ),
			array( 'stonescript' => 'StoneScript' ),
			array( 'swift' => 'Swift' ),
			array( 'systemverilog' => 'SystemVerilog' ),
			array( 'tcl' => 'TCL' ),
			array( 'tclegg' => 'TCLEGG' ),
			array( 'teraterm' => 'Tera Term Macro' ),
			array( 'texgraph' => 'TeXgraph' ),
			array( 'text' => 'Text' ),
			array( 'thinbasic' => 'thinBasic' ),
			array( 'tsql' => 'T-SQL' ),
			array( 'twig' => 'Twig' ),
			array( 'typoscript' => 'TypoScript' ),
			array( 'unicon' => 'Unicon (Unified Extended Dialect of Icon)' ),
			array( 'upc' => 'UPC' ),
			array( 'urbi' => 'Urbi' ),
			array( 'uscript' => 'Unreal Script' ),
			array( 'vala' => 'Vala' ),
			array( 'vb' => 'Visual Basic' ),
			array( 'vbnet' => 'vb.net' ),
			array( 'vbscript' => 'VBScript' ),
			array( 'vedit' => 'Vedit macro language' ),
			array( 'verilog' => 'Verilog' ),
			array( 'vhdl' => 'VHDL' ),
			array( 'vim' => 'Vim Script' ),
			array( 'visualfoxpro' => 'Visual Fox Pro' ),
			array( 'visualprolog' => 'Visual Prolog' ),
			array( 'whitespace' => 'Whitespace' ),
			array( 'whois' => 'Whois (RPSL format)' ),
			array( 'winbatch' => 'Winbatch' ),
			array( 'wolfram' => 'Wolfram' ),
			array( 'xbasic' => 'XBasic' ),
			array( 'xml' => 'XML' ),
			array( 'xojo' => 'Xojo' ),
			array( 'xorg_conf' => 'Xorg configuration' ),
			array( 'xpp' => 'X++' ),
			array( 'yaml' => 'YAML' ),
			array( 'z80' => 'ZiLOG Z80 Assembler' ),
			array( 'zxbasic' => 'ZXBasic' )
		)

	->addTrueFalse(
		'align_image_to_the_left',
		array(
			'default_value' => 0,
		)
	)
		->conditional( 'features_style', '==', 'product' )

	->setLocation( 'block', '==', 'acf/features' );

return $features;
