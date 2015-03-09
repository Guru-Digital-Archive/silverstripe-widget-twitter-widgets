<?php

class TwitterWidgetsWidget extends Widget {

    private static $db = array(
        "TwitterHTML"     => "Text",
        "Href"            => "Text",
        "TwitterWidgetID" => "Text",
    );

    /**
     * @var string
     */
    private static $title = "Twitter Widget";

    /**
     * @var string
     */
    private static $cmsTitle = "Widget containg a Twitter Widget";

    /**
     * @var string
     */
    private static $description = "Display Twitter widget on your site.";

    public function SmallWidget() {
        $result = array(
            "WidgetTitle"   => $this->Title,
            "WidgetContent" => $this->WidgetContent
        );
        return $result;
    }

    public function Title() {
        return $this->WidgetLabel;
    }

    public function getCMSFields() {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab("Root.Main", $fields->dataFieldByName("WidgetName"), "Enabled");
        $fields->addFieldToTab("Root.Main", $fields->dataFieldByName("WidgetLabel"), "Enabled");
        return $fields;
    }

    public function onBeforeWrite() {
        parent::onBeforeWrite();
        if ($this->TwitterHTML) {
            $hrefAndId             = array();
            preg_match_all('/<a.*href="(.+)".*data-widget-id="([0-9]*)".*>.*<\/a>/U', $this->TwitterHTML, $hrefAndId);
            $this->Href            = isset($hrefAndId[1][0]) ? $hrefAndId[1][0] : "";
            $this->TwitterWidgetID = isset($hrefAndId[2][0]) ? $hrefAndId[2][0] : "";
        }
    }

}
