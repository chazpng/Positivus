<?php
/**
 * ACF Hero Section.
 *
 * @link https://github.com/StoutLogic/acf-builder/wiki
 *
 * @package greydientlab
 */

$hero_sections = new StoutLogic\AcfBuilder\FieldsBuilder( 'hero_sections' );
$hero_sections
	->addSelect(
		'hero_style',
		array(
			'default_value' => 'simple',
		)
	)

	->addChoices(
		array( 'simple' => 'Simple' ),
		array( 'column' => 'Two Column' )
	)

	->addSelect(
		'two_column_type',
		array(
			'default_value' => 'default',
		)
	)
	->conditional( 'hero_style', '==', 'column' )
	->addChoices(
		array( 'default' => 'Split with screenshot' ),
		array( 'code' => 'Split with code' ),
		array( 'phone' => 'with phone mockup' ),
		array( 'image' => 'Split with image' ),
		array( 'angled' => 'With angled image on right' ),
		array( 'tiles' => 'With image tiles' ),
		array( 'offset' => 'With offset tiles' )
	)
	->addImage(
		'background_image',
		array(
			'preview_size'  => 'medium',
			'return_format' => 'id',
		)
	)
	->conditional( 'hero_style', '==', 'simple' )

	->addSelect(
		'eyebrow_style',
		array(
			'default_value' => 'simple',
		)
	)
	->conditional( 'hero_style', '==', 'column' )
	->conditional( 'two_column_type', '==', 'default' )
	->or( 'two_column_type', '==', 'code' )
	->or( 'two_column_type', '==', 'phone' )

	->addChoices(
		array( 'simple' => 'Simple' ),
		array( 'label' => 'Two Label' )
	)

	->addText( 'eyebrow_primary_label' )
	->conditional( 'hero_style', '==', 'column' )
	->conditional( 'eyebrow_style', '==', 'label' )

	->addText( 'eyebrow_secondary_label' )
	->conditional( 'hero_style', '==', 'column' )
	->conditional( 'eyebrow_style', '==', 'label' )

	->addUrl( 'primary_eyebrow_link' )
	->conditional( 'hero_style', '==', 'column' )
	->conditional( 'eyebrow_style', '==', 'label' )


	->addWysiwyg(
		'eyebrow_link',
		array(
			'media_upload' => 0,
		)
	)
	->conditional( 'hero_style', '==', 'simple' )
	->conditional( 'two_column_type', '==', 'image' )
	->or( 'two_column_type', '==', 'angled' )


	->addText( 'title' )
	->addTextArea( 'description' )
	->addImage(
		'featured_image',
		array(
			'preview_size'  => 'medium',
			'return_format' => 'id',
		)
	)
	->addSelect(
		'language',
		array(
			'default_value' => 'javascript',
			'ui'            => 1,
		)
	)
	->conditional( 'hero_style', '==', 'column' )
	->conditional( 'two_column_type', '==', 'code' )
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

	->addTextArea( 'code' )


	->addText( 'primary_button_text' )
	->addUrl( 'primary_button_link' )
	->addText( 'secondary_button_text' )
	->addUrl( 'secondary_button_link' )


	->setLocation( 'block', '==', 'acf/hero-sections' );

return $hero_sections;
