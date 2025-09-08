<?php

namespace Course2Link22\DependencyInjectionExample\Model;

class Main
{
    protected array $data;
    protected Injectable $injectable;
    protected NoninjectableinterfaceFactory $noninjectableFactory; //by adding Factory at end this will become non-injectable. we can see the difference inside generated folder. inside model folder
    public function __construct(Injectableinterface $injectable, NoninjectableinterfaceFactory $noninjectableFactory, array $data = []) //it's not necessary to use interface be can directly use class. but will using interfaces we need to specify in di.xml file the preferace that if this interface it excessed then return this class. the idea behind interfaces is to hide the implementation.
    {
        $this->data = $data; //$data is coming from etc/frontend/di.xml
        $this->injectable = $injectable;
        $this->noninjectableFactory = $noninjectableFactory;
    }

    public function getId(): string
    {
        return $this->data['id'];
    }
    public function getInjectable(): Injectable
    {
        return $this->injectable;
    }
    public function getNonInjectable(): Noninjectable
    {
        return $this->noninjectableFactory->create();
    }
}
