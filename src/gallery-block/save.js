import { useBlockProps } from '@wordpress/block-editor';

export default function save({ attributes }) {
    const { images } = attributes;

    return (
        <div {...useBlockProps.save()} className="gallery-container">
            <div className="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                {images.map((image) => (
                    <div key={image.id} className="gallery-item overflow-hidden rounded-xl shadow-lg">
                        <div className="flip-card w-full h-[350px] relative">
                            <img src={image.url} alt={image.alt} className="w-full h-full object-cover rounded-xl" />
                        </div>
                    </div>
                ))}
            </div>
        </div>
    );
}
