<?php

/**
 * Copyright 2024 Adobe
 * All Rights Reserved.
 */

namespace RajNishad\Assignment2\Plugin;

class CopyrightPlugin
{
    /**
     * @param \Magento\Theme\Block\Html\Footer $subject
     * @param string $result
     * @return string
     */
    public function afterGetCopyright(
        \Magento\Theme\Block\Html\Footer $subject,
        $result
    ) {
        return "© 2025 Raj Nishad. All Rights Reserved.";
    }
}
