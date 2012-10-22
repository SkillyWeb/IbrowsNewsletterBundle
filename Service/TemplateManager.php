<?php

namespace Ibrows\Bundle\NewsletterBundle\Service;

class TemplateManager
{
	protected $mandants;
	protected $newsletters;
	protected $base_template;
	
	public function __construct($base_template, array $mandants, array $newsletters)
	{
		$this->base_template = $base_template;
		$this->mandants = $mandants;
		$this->newsletters = $newsletters;
	}
	
	public function getNewsletter($name)
	{
		if(!key_exists($name, $this->newsletters)) {
			throw new \InvalidArgumentException("The newsletter-view with name $name can not be found.");
		}
		
		return $this->newsletters[$name];
	}
    
    public function getMandant($name)
	{
		if(!key_exists($name, $this->mandants)) {
			throw new \InvalidArgumentException("The mandant-view with name $name can not be found.");
		}
		
		return $this->mandants[$name];
	}
	
	public function getBaseTemplate()
	{
		return $this->base_template;
	}
}
