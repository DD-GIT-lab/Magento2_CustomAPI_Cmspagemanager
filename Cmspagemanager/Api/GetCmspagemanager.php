<?php

namespace Dynamic\Cmspagemanager\Api;

interface GetCmspagemanager {

	/**
     * Returns CMSPage data
     *
     * @param int $pageId
     * @return array
     */
    public function getCmspagemanagerList($pageId);
}
