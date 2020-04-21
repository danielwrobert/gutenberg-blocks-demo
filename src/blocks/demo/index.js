import { __ } from '@wordpress/i18n';
import { registerBlockType } from '@wordpress/blocks';
import { FormFileUpload } from '@wordpress/components';

const blockStyle = {
	backgroundColor: '#900',
	color: '#fff',
	padding: '20px',
};

registerBlockType( 'gutenberg-blocks-demo/demo', {
	title: __( 'Demo', 'gutenberg-blocks-demo' ),
	icon: 'universal-access-alt',
	category: 'custom-blocks',
	edit() {
		return (
			<>
			<FormFileUpload
				accept="image/*"
				onChange={ () => console.log('new image') }
			>
				Upload
			</FormFileUpload>
			<div className="demo-block" style={ blockStyle }>Hello World! Here is a static block (from the editor).</div>
			</>
		);
	},
	save() {
		return (
			<div className="demo-block" style={ blockStyle }>Hello World! Here is a static block (from the frontend).</div>
		);
	},
} );