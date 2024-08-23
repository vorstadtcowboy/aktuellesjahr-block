import { useBlockProps } from "@wordpress/block-editor";

export default function Save({ attributes }) {
	const { textAlign } = attributes;

	const blockProps = useBlockProps.save({
		//style: { textAlign: textAlign }, // Apply inline style for alignment in the saved content
		className: `has-text-align-${textAlign}`,
	});

	return <p {...blockProps}>© {new Date().getFullYear()}</p>;
}
