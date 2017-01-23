<?php

namespace Redmine\Api;

/**
 * Listing issue priorities.
 *
 * @link   http://www.redmine.org/projects/redmine/wiki/Rest_Enumerations#enumerationsissue_prioritiesformat
 *
 * @author Kevin Saliou <kevin at saliou dot name>
 */
class IssuePriority extends AbstractApi
{
    private $issuePriorities = array();

    /**
     * List issue priorities.
     *
     * @link http://www.redmine.org/projects/redmine/wiki/Rest_Enumerations#enumerationsissue_prioritiesformat
     *
     * @param array $params optional parameters to be passed to the api (offset, limit, ...)
     *
     * @return array list of issue priorities found
     */
    public function all(array $params = array())
    {
        $this->issuePriorities = $this->retrieveAll('/enumerations/issue_priorities.json', $params);

        return $this->issuePriorities;
    }
}
