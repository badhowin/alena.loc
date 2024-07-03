import {
	ClassicEditor,
	AccessibilityHelp,
	Alignment,
	AutoLink,
	Autosave,
	BalloonToolbar,
	BlockQuote,
	Bold,
	Essentials,
	HorizontalLine,
	Indent,
	IndentBlock,
	Italic,
	Link,
	List,
	Paragraph,
	SelectAll,
	SpecialCharacters,
	Strikethrough,
	Underline,
	Undo
} from 'ckeditor5';

const editorConfig = {
	toolbar: {
		items: [
			'undo',
			'redo',
			'|',
			'bold',
			'italic',
			'underline',
			'strikethrough',
			'|',
			'link',
			'blockQuote',
			'|',
			'alignment',
			'|',
			'bulletedList',
			'numberedList',
			'indent',
			'outdent',
			'|',
		],
		shouldNotGroupWhenFull: false
	},
	plugins: [
		AccessibilityHelp,
		Alignment,
		AutoLink,
		Autosave,
		BalloonToolbar,
		BlockQuote,
		Bold,
		Essentials,
		HorizontalLine,
		Indent,
		IndentBlock,
		Italic,
		Link,
		List,
		Paragraph,
		SelectAll,
		SpecialCharacters,
		Strikethrough,
		Underline,
		Undo
	],
	balloonToolbar: ['bold', 'italic', '|', 'link', '|', 'bulletedList', 'numberedList'],
	
	link: {
		addTargetToExternalLinks: true,
		defaultProtocol: 'https://',
		decorators: {
			toggleDownloadable: {
				mode: 'manual',
				label: 'Downloadable',
				attributes: {
					download: 'file'
				}
			}
		}
	},
	placeholder: 'Type or paste your content here!'
};

ClassicEditor.create(document.querySelector('#editor'), editorConfig);
