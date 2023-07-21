import {InspectorControls} from '@wordpress/block-editor';

import {
	ToggleControl,
	Panel,
	PanelBody,
	PanelRow
} from '@wordpress/components';

import {__} from '@wordpress/i18n';

const Options = ({options}) => {

	const {attributes, setAttributes} = options;

	return (
		<InspectorControls>
			<Panel>
				<PanelBody title={__('Label Settings', 'plugin-name')} initialOpen={false}>
					<PanelRow>
						<ToggleControl
							label={__('Test Input', 'plugin-name')}
							help={
								attributes.firstAttr
									? 'Show'
									: 'Hide'
							}
							checked={attributes.firstAttr}
							onChange={(val) => setAttributes({firstAttr: val})}
						/>
					</PanelRow>
				</PanelBody>
			</Panel>
		</InspectorControls>
	)
}

export default Options;
