<?php
namespace EssentialBlocks\Blocks;

use EssentialBlocks\Core\Block;

class ShapeDivider extends Block
{
    protected $frontend_styles = [ 'essential-blocks-block-common' ];
    /**
     * Unique name of the block.
     *
     * @return string
     */
    public function get_name()
    {
        return 'shape-divider';
    }

    /**
     * Register all other scripts
     *
     * @return void
     */
    public function register_scripts()
    {
        $this->assets_manager->register(
            'shape-divider-frontend',
            $this->path() . '/frontend/index.js'
        );
    }
}
