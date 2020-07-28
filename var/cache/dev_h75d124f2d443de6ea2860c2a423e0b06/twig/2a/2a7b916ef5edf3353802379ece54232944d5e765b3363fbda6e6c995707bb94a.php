<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Storefront/storefront/component/checkout/offcanvas-cart-summary.html.twig */
class __TwigTemplate_449721021c79bb1f09a9734c46e33be8eab271b82da1ff2d0a01b8e15c153cea extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_offcanvas_summary_content' => [$this, 'block_component_offcanvas_summary_content'],
            'component_offcanvas_summary_total' => [$this, 'block_component_offcanvas_summary_total'],
            'component_offcanvas_summary_total_label' => [$this, 'block_component_offcanvas_summary_total_label'],
            'component_offcanvas_summary_total_value' => [$this, 'block_component_offcanvas_summary_total_value'],
            'component_offcanvas_summary_content_info' => [$this, 'block_component_offcanvas_summary_content_info'],
            'component_offcanvas_summary_content_shipping' => [$this, 'block_component_offcanvas_summary_content_shipping'],
            'page_checkout_confirm_shipping_form_csrf' => [$this, 'block_page_checkout_confirm_shipping_form_csrf'],
            'component_offcanvas_summary_content_shipping_select' => [$this, 'block_component_offcanvas_summary_content_shipping_select'],
            'component_offcanvas_summary_tax_info' => [$this, 'block_component_offcanvas_summary_tax_info'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/checkout/offcanvas-cart-summary.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/checkout/offcanvas-cart-summary.html.twig"));

        // line 1
        $this->displayBlock('component_offcanvas_summary_content', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_offcanvas_summary_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_summary_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_summary_content"));

        // line 2
        echo "    <div class=\"offcanvas-summary\">
        <dl class=\"row offcanvas-summary-list\">
            ";
        // line 4
        $this->displayBlock('component_offcanvas_summary_total', $context, $blocks);
        // line 17
        echo "        </dl>

        ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, true, false, 19), "deliveries", [], "any", true, true, false, 19)) {
            // line 20
            echo "
            ";
            // line 21
            $context["activeShipping"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 21), "deliveries", [], "any", false, false, false, 21), "elements", [], "any", false, false, false, 21)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null);
            // line 22
            echo "
            ";
            // line 23
            $this->displayBlock('component_offcanvas_summary_content_info', $context, $blocks);
            // line 38
            echo "
            ";
            // line 39
            $this->displayBlock('component_offcanvas_summary_content_shipping', $context, $blocks);
            // line 72
            echo "
        ";
        }
        // line 74
        echo "    </div>

    ";
        // line 76
        $this->displayBlock('component_offcanvas_summary_tax_info', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_component_offcanvas_summary_total($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_summary_total"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_summary_total"));

        // line 5
        echo "                ";
        $this->displayBlock('component_offcanvas_summary_total_label', $context, $blocks);
        // line 10
        echo "
                ";
        // line 11
        $this->displayBlock('component_offcanvas_summary_total_value', $context, $blocks);
        // line 16
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_component_offcanvas_summary_total_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_summary_total_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_summary_total_label"));

        // line 6
        echo "                    <dt class=\"col-7 summary-label summary-total\">
                        ";
        // line 7
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.subtotalAmount"));
        echo "
                    </dt>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_component_offcanvas_summary_total_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_summary_total_value"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_summary_total_value"));

        // line 12
        echo "                    <dd class=\"col-5 summary-value summary-total\">
                        ";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 13), "price", [], "any", false, false, false, 13), "positionPrice", [], "any", false, false, false, 13)), "html", null, true);
        echo "
                    </dd>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_component_offcanvas_summary_content_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_summary_content_info"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_summary_content_info"));

        // line 24
        echo "                <div class=\"row offcanvas-shipping-info\">
                    <span class=\"col-7 shipping-label shipping-cost\">
                        <strong>";
        // line 26
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.summaryShipping"));
        echo "</strong>

                        <small ";
        // line 28
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "shippingMethods", [], "any", false, false, false, 28))) {
            echo "class=\"js-toggle-shipping-selection\"";
        }
        echo ">
                            (";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["activeShipping"] ?? null), "shippingMethod", [], "any", false, false, false, 29), "translated", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29), "html", null, true);
        echo ")
                        </small>
                    </span>

                    <span class=\"col-5 shipping-value shipping-cost\">
                        + ";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["activeShipping"] ?? null), "shippingCosts", [], "any", false, false, false, 34), "totalPrice", [], "any", false, false, false, 34)), "html", null, true);
        echo "
                    </span>
                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_component_offcanvas_summary_content_shipping($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_summary_content_shipping"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_summary_content_shipping"));

        // line 40
        echo "                ";
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "shippingMethods", [], "any", false, false, false, 40))) {
            // line 41
            echo "                    <div class=\"offcanvas-shipping-preference mb-2 mt-2 offcanvas-shipping-preference--hidden\">
                        <form
                            action=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.configure");
            echo "\"
                            name=\"confirmShippingForm\"
                            data-form-csrf-handler=\"true\"
                            method=\"post\">
                            ";
            // line 47
            $this->displayBlock('page_checkout_confirm_shipping_form_csrf', $context, $blocks);
            // line 50
            echo "
                            <input type=\"hidden\" name=\"forwardTo\" value=\"frontend.cart.offcanvas\">

                            ";
            // line 53
            $this->displayBlock('component_offcanvas_summary_content_shipping_select', $context, $blocks);
            // line 68
            echo "                        </form>
                    </div>
                ";
        }
        // line 71
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_page_checkout_confirm_shipping_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_shipping_form_csrf"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_shipping_form_csrf"));

        // line 48
        echo "                                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.checkout.configure");
        echo "
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 53
    public function block_component_offcanvas_summary_content_shipping_select($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_summary_content_shipping_select"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_summary_content_shipping_select"));

        // line 54
        echo "
                                <select class=\"custom-select mt-2 col-12\" name=\"shippingMethodId\">
                                    <option disabled>";
        // line 56
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.confirmChangeShipping"));
        echo "</option>

                                    ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "shippingMethods", [], "any", false, false, false, 58));
        foreach ($context['_seq'] as $context["_key"] => $context["shippingMethod"]) {
            // line 59
            echo "                                        <option
                                            value=\"";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shippingMethod"], "id", [], "any", false, false, false, 60), "html", null, true);
            echo "\"
                                            ";
            // line 61
            if ((twig_get_attribute($this->env, $this->source, $context["shippingMethod"], "id", [], "any", false, false, false, 61) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["activeShipping"] ?? null), "shippingMethod", [], "any", false, false, false, 61), "id", [], "any", false, false, false, 61))) {
                echo "selected=\"selected\"";
            }
            echo " >
                                            ";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingMethod"], "translated", [], "any", false, false, false, 62), "name", [], "any", false, false, false, 62), "html", null, true);
            echo "
                                        </option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shippingMethod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                                </select>

                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_component_offcanvas_summary_tax_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_summary_tax_info"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_summary_tax_info"));

        // line 77
        echo "        <p class=\"offcanvas-cart-tax\">
            <small>
                ";
        // line 79
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 79), "price", [], "any", false, false, false, 79), "taxStatus", [], "any", false, false, false, 79) == "gross")) {
            // line 80
            echo "                    ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.grossTaxInformation"));
            echo "
                ";
        } else {
            // line 82
            echo "                    ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.netTaxInformation"));
            echo "
                ";
        }
        // line 84
        echo "            </small>
        </p>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/checkout/offcanvas-cart-summary.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  399 => 84,  393 => 82,  387 => 80,  385 => 79,  381 => 77,  371 => 76,  359 => 65,  350 => 62,  344 => 61,  340 => 60,  337 => 59,  333 => 58,  328 => 56,  324 => 54,  314 => 53,  301 => 48,  291 => 47,  281 => 71,  276 => 68,  274 => 53,  269 => 50,  267 => 47,  260 => 43,  256 => 41,  253 => 40,  243 => 39,  229 => 34,  221 => 29,  215 => 28,  210 => 26,  206 => 24,  196 => 23,  183 => 13,  180 => 12,  170 => 11,  157 => 7,  154 => 6,  144 => 5,  134 => 16,  132 => 11,  129 => 10,  126 => 5,  116 => 4,  106 => 76,  102 => 74,  98 => 72,  96 => 39,  93 => 38,  91 => 23,  88 => 22,  86 => 21,  83 => 20,  81 => 19,  77 => 17,  75 => 4,  71 => 2,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_offcanvas_summary_content %}
    <div class=\"offcanvas-summary\">
        <dl class=\"row offcanvas-summary-list\">
            {% block component_offcanvas_summary_total %}
                {% block component_offcanvas_summary_total_label %}
                    <dt class=\"col-7 summary-label summary-total\">
                        {{ \"checkout.subtotalAmount\"|trans|sw_sanitize }}
                    </dt>
                {% endblock %}

                {% block component_offcanvas_summary_total_value %}
                    <dd class=\"col-5 summary-value summary-total\">
                        {{ page.cart.price.positionPrice|currency }}
                    </dd>
                {% endblock %}
            {% endblock %}
        </dl>

        {% if page.cart.deliveries is defined %}

            {% set activeShipping = page.cart.deliveries.elements[0] %}

            {% block component_offcanvas_summary_content_info %}
                <div class=\"row offcanvas-shipping-info\">
                    <span class=\"col-7 shipping-label shipping-cost\">
                        <strong>{{ \"checkout.summaryShipping\"|trans|sw_sanitize }}</strong>

                        <small {% if page.shippingMethods|length %}class=\"js-toggle-shipping-selection\"{% endif %}>
                            ({{ activeShipping.shippingMethod.translated.name }})
                        </small>
                    </span>

                    <span class=\"col-5 shipping-value shipping-cost\">
                        + {{ activeShipping.shippingCosts.totalPrice|currency }}
                    </span>
                </div>
            {% endblock %}

            {% block component_offcanvas_summary_content_shipping %}
                {% if page.shippingMethods|length %}
                    <div class=\"offcanvas-shipping-preference mb-2 mt-2 offcanvas-shipping-preference--hidden\">
                        <form
                            action=\"{{ path('frontend.checkout.configure') }}\"
                            name=\"confirmShippingForm\"
                            data-form-csrf-handler=\"true\"
                            method=\"post\">
                            {% block page_checkout_confirm_shipping_form_csrf %}
                                {{ sw_csrf('frontend.checkout.configure') }}
                            {% endblock %}

                            <input type=\"hidden\" name=\"forwardTo\" value=\"frontend.cart.offcanvas\">

                            {% block component_offcanvas_summary_content_shipping_select %}

                                <select class=\"custom-select mt-2 col-12\" name=\"shippingMethodId\">
                                    <option disabled>{{ \"checkout.confirmChangeShipping\"|trans|sw_sanitize }}</option>

                                    {% for shippingMethod in page.shippingMethods %}
                                        <option
                                            value=\"{{ shippingMethod.id }}\"
                                            {% if shippingMethod.id is same as(activeShipping.shippingMethod.id) %}selected=\"selected\"{% endif %} >
                                            {{ shippingMethod.translated.name }}
                                        </option>
                                    {% endfor %}
                                </select>

                            {% endblock %}
                        </form>
                    </div>
                {% endif %}
            {% endblock %}

        {% endif %}
    </div>

    {% block component_offcanvas_summary_tax_info %}
        <p class=\"offcanvas-cart-tax\">
            <small>
                {% if page.cart.price.taxStatus == \"gross\" %}
                    {{ \"general.grossTaxInformation\"|trans|sw_sanitize }}
                {% else %}
                    {{ \"general.netTaxInformation\"|trans|sw_sanitize }}
                {% endif %}
            </small>
        </p>
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/component/checkout/offcanvas-cart-summary.html.twig", "/var/www/html/sw6/vendor/shopware/platform/src/Storefront/Resources/views/storefront/component/checkout/offcanvas-cart-summary.html.twig");
    }
}
