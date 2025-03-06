import { __ } from '@wordpress/i18n';
import { useBlockProps, MediaUpload, MediaUploadCheck } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';

export default function Edit({ attributes, setAttributes }) {
    const { images } = attributes;

    return (
        <div {...useBlockProps()}>
            <MediaUploadCheck>
                <MediaUpload
                    multiple
                    gallery
                    value={images.map((img) => img.id)}
                    onSelect={(newImages) => setAttributes({ images: newImages })}
                    render={({ open }) => (
                        <Button onClick={open} isPrimary>{__('Upload/Select Images', 'my-custom-gallery')}</Button>
                    )}
                />
            </MediaUploadCheck>

            <div className="gallery-preview">
                {images.map((image) => (
                    <img key={image.id} src={image.url} alt={image.alt} className="gallery-image" />
                ))}
            </div>
        </div>
    );
}
