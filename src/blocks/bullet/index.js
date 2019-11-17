import { __ } from '@wordpress/i18n';
import { registerBlockType } from '@wordpress/blocks';
import { FormFileUpload } from '@wordpress/components';

const blockStyle = {
	backgroundColor: '#900',
	color: '#fff',
	padding: '20px',
};

registerBlockType( 'a8c-mktg-blocks/bullet', {
	title: __( 'Bullet', 'a8c-mktg-blocks' ),
	icon: 'universal-access-alt',
	category: 'layout',
	edit() {
		return (
			<>
			<FormFileUpload
				accept="image/*"
				onChange={ () => console.log('new image') }
			>
				Upload
			</FormFileUpload>
			<div className="bullet-block" style={ blockStyle }>Hello World! Here is a static block (from the editor).</div>
			</>
		);
	},
	save() {
		return (
			<div className="bullet-block" style={ blockStyle }>Hello World! Here is a static block (from the frontend).</div>
		);
	},
} );