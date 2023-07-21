/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * Get translatable texts from I18n.json
 */
import I18n from "../../inc/I18n/I18n.json";

/**
 * Get control panel and options bar of the block.
 */
import Options from "./options";


/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps } from '@wordpress/block-editor';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {WPElement} Element to render.
 */
export default function Edit(props) {

	//Get block attributes from metadata
	const {attributes} = props;
	const blockProps = useBlockProps(props);

	//Get translatable text from I118n
	const text = I18n.hello_text.text;
	
	return (
		<>
		
			<Options options={props}/>
		
			<p {...blockProps}>
				{__(text)}
			</p>
				
		</>
		
	);
}
