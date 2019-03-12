# Automad Bootstrap Theme

A responsive multi-purpose theme for the [Automad](http://automad.org) CMS based on the [Bootstrap](https://getbootstrap.com) framework. 
Check out the demo page and all available templates [here](https://bootstrap.dev.automad.org).
     
![](https://bootstrap.dev.automad.org/shared/screenshot-1.png)

## Options & Settings

There are multiple variables used by this theme for configuration. Find below a selection of the most important options to control the look and feel of your site. Other options can be explored by just trying them out in the page settings.

### Custom Bootstrap CSS
Since the theme is fully based on the Bootstrap framework, it is possible to use a customized version of Bootstrap. You can use the `bootstrapCss` variable to provide an alternative URL for the `.css` file. A custom `.css` file can simply be uploaded in the shared data section of the dashboard. You can find more information about customizing Bootstrap [here](https://getbootstrap.com/docs/4.3/getting-started/theming/).

### Google Analytics and Other Custom Header or Footer Items

Sometimes it is required to add custom Javascript or CSS to one or more pages. This could be for example the case if you would want to add a Google Analytics tracking snippet to your site. Therefore this theme provides two variables for that purpose. The `itemsHeader` variable lets you add all kind of header items right before the closing `</head>` tag. To add any HTML or JS right before the closing `</body>` tag you can use the `itemsFooter` variable.

### Search

The search field in the navbar can be enabled by defining a page as a results page. Therefore simply enter the internal URL of one of your pages for the `urlSearchResults` variable in the **Shared Data & Settings** Section of the Dashboard. Note that the selected page needs to have a template including a pagelist like *Blog* or *Portfolio*.

![](https://bootstrap.dev.automad.org/shared/screenshot-2.png)

### Navbar Action Button

To highlight a certain action of your site you can define an internal or external URL for the `urlActionButton`. A primary button will then appear in your navbar.

### Carousel Configuration

As soon as a file pattern or list for the `images` variable has been set in the page settings, a carousel slide show will appear on the page. You can also define a generic pattern in the shared settings section which will then be used for all pages as a default.
File patterns can have a `*` to represent zero or more characters. Multiple patterns can be separated by a comma. A typical pattern looks like:

	*.jpg, *.png, *.gif 

To change the height of the image slider, use the `carouselHeight` variable.

### Pagelist Sorting

By default, pagelists are sorted by date descending. You can change that behavior by adding a value for the `sortPages` variable on a blog or portfolio page. To define the sorting of pages in the list, you have to provide a combination of the variable to sort the pages by and a sorting order like `date desc` or `title asc`.

### Template Filters
You can use a regex for the `templateFilter` variable to filter a pagelist by the templates of the pages.

### Open Graph Images
Title and description are automatically used for open graph tags to be used as preview when sharing a page. You can also define a pattern to be used for the preview image used as the value for the `og:image` property. A good pattern would be `*.jpg, *.png, /shared/og.png`. With this pattern, the first JPG or PNG image would be used as preview image while using a file called `og.png` in the shared files section as a fallback for pages without any image.