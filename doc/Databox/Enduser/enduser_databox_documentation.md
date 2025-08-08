

# Databox User Documentation

---

# Introduction

Phrasea is a Digital Asset Management (DAM) solution developed by Alchemy, a French publisher based in Paris and a DAM expert since the early 90s. Designed as the evolution of Phraseanet (launched in 2005), Phrasea is a robust, modern, and complete DAM solution, entirely rewritten to address the current challenges of managing digital media.

Open Source, it is a sovereign alternative to proprietary platforms, guaranteeing transparency and independence.

API-first, and highly scalable, Phrasea is available in SaaS, On-premise, and hybrid modes.

It offers everything you expect from a DAM: import with or without pre-indexing, manual or automatic indexing, workflow management, collaboration and sharing tools, web publishing, and advanced rights management. It is particularly well-suited for communication and marketing teams, public institutions and communities, media and photographers, and IT departments.

---

**Phrasea's Strengths in a Few Words…**

* Modern and API-First Architecture. Based on microservices: each module is isolated and can be deployed independently. Docker/Kubernetes deployment: Containerized deployment ensures a consistent installation, automatic scaling, and total control over the infrastructure.  
* One of the few solutions available in both SaaS and On-Premise modes.  
* Professional support available via the publisher Alchemy (maintenance contracts, support hour packages, hosting offers, specific development, training, etc.).  
* Modern, responsive, and multilingual interface.  
* Massive, fast, and reliable import: Effortlessly manage thousands of files.  
* Powerful search with the Elastic engine: Full-text search, faceted search, advanced filters on all types of metadata, suggestions, and sorting.  
* Manual or automatic batch indexing, tags.  
* Collaboration tools (annotation, integrated chat) and asset sharing.  
* Numerous integrations available for assets (simple retouching, background removal, text detection, etc.).  
* Asset versioning, rendition generation.  
* Integrated web publishing with Phrasea Expose (creation of mini-sites, CDN integration, ideal for sharing assets externally with or without a password, terms of use, customization of web gallery templates, etc.).  
* Enhanced security: Authentication via Keycloak, SSO, OAuth2, MFA. Granular access control (ACL, roles, etc.).

1. # Databox

## 

## The Interface

The media management interface is called "Databox". It is divided into several areas:

* ### The Sidebar

On the left side of the Databox window is a sidebar.

It is composed of 3 tabs:

* The collection tree: to navigate among the available Workspaces and Collections.  
* The facets: to filter results according to different criteria and guide your search.  
* The baskets: to group assets, temporarily or not, for an action: editing, exporting, sharing, publishing a gallery on an external site, etc.

* ### The Search Bar

The top of the window features a search bar.

* Simple search: Enter one or more terms to find assets.  
* Advanced search: Enter one or more conditions to perform searches in specific fields.  
* Sorting: To classify the results according to your needs, and/or by major sections for an even clearer display.

* ### The Results Display Area

The central area allows you to view all assets resulting from a search. By default, they are presented as thumbnails (two other display modes are available in the display preferences: list and masonry).

* ### The Actions Menu

The main actions menu is located just above the results display area. It allows you to perform numerous actions on assets:

* Add assets to a basket  
* Export  
* Move  
* Edit attributes  
* Duplicate  
* Share  
* Delete

To the right of the actions menu, on the same line, are the **User Preferences**. They group the following options:

* Display mode for results  
* Display preferences for asset views: whether or not to show titles, collections, tags, hover preview  
* Choice of thumbnail size  
* Choice of global display size and ratio between preview and attributes  
* Creation and management of personal attribute lists


* ### Adding Assets

The "+" icon in the bottom right corner of the window allows you to add assets to a collection by Browse the Workspace tree.

Other import methods are available in Phrasea. For example, it is also possible to import files from the sidebar by hovering over the title of the destination collection.

---

### 

## Importing

* ### Adding Assets

Adding assets (photos, videos, audio documents, PDFs, etc.) is very easy in the DAM. There are several methods to import assets into Phrasea:

#### Add Assets from the \+ icon

* Click on the "+" button located in the bottom right of the interface. A window opens.  
* Select files or drag and drop them into the window.  
* Choose a Workspace if there are multiple, as well as the destination collection.  
* Select the documents' confidentiality (Public, Private, or Secret).  
* Validate the transfer by clicking the "Add" button.

  #### Add Assets Directly from a Collection

* In the sidebar:  
* Browse the tree and choose your destination collection for these new assets.  
* When hovering over the collection title, the "..." icon appears. Click on it.  
* Select "Add a new asset to the collection".  
* The rest of the process is the same as the one previously mentioned.

  #### Drag and Drop Documents into Databox

A simple drag and drop anywhere on the window opens the import window. The documents are in place for adding; all that's left is to select a destination collection and follow the same procedure as before.

#### Using Phrasea Uploader

Besides importing within Databox, it is possible to use Phrasea Uploader.

Phrasea Uploader is a dedicated application for importing files.

* Import from any device (phone, tablet, desktop)  
* Large file volumes  
* Construction of pre-indexing forms  
* Customizable input channels  
* Automated imports (retrieving media from other applications)


* ### Adding with Pre-indexing

Pre-index your content during import. Instead of directly clicking the "Import" button after loading your assets, fill out the form presented to you. A form allows you to fill in information in the different attributes that have been configured: title, description, keywords, credit, tags, etc. From this same window, it is possible to perform pre-indexing in several languages simultaneously.

* ### Using Models on Import

Pre-indexing models allow you to automatically pre-fill metadata when importing assets. They speed up users' work while ensuring document consistency. Less input also means fewer errors or risks of omissions.

**To create a model:**

* Fill in the attributes, tags, etc., on assets selected for import, then check the box in the import form: "Save values as a model for reuse".  
* Give the model a name.  
* Fill in the options available within a model:  
  * Replace or not a model that has been applied  
  * Apply or not to the collection  
  * Include or not sub-collections  
  * Include or not attributes  
  * Include or not confidentiality  
  * Include or not tags  
* Make the model Public or only available for use by the user who created it.  
* Click the "Add" button to transfer the assets.  
* On the next import, the model appears in the dropdown list of the field at the top of the form, "Fill with model".

**Good to know:**

\>Users can thus create models adapted for different uses, which can be shared if needed.

\>Models can be combined.

## ---

## 

## Search

* ### Search: Introduction

[The search engine used by Phrasea is Elastic.](https://www.elastic.co/)

Elasticsearch is a distributed, open-source solution designed for search and analytics engines, optimized for speed, scalability, and AI applications. As a retrieval platform, it stores structured, unstructured, and vector data in real-time—offering fast hybrid and vector search, powering observability and security, and enabling AI-driven applications to achieve high performance, optimal accuracy, and relevance.

Among other things, Elasticsearch allows you to:

* Search for documents in free text, by exact words, or precise phrases.  
* Search in multiple fields at once.  
* Combine numerous criteria (conditions).  
* Perform fuzzy searches.  
* Search with value ranges (dates, numbers).  
* Finally, adjust the relevance of results using custom scoring functions.  
* These search methods with Elastic are numerous and detailed here on the Elastic website: [https://www.elastic.co/docs/explore-analyze/query-filter](https://www.elastic.co/docs/explore-analyze/query-filter)

* ### Simple Search

In Databox, the search bar is located above the results display. Place the cursor in the search bar and enter a term.

The "Search Suggestions" feature helps guide the user in their search by proposing terms. This also helps you avoid missing important information.

By default, the results are displayed as a grid (thumbnails).

In Phrasea, there is an automatic highlighting feature for terms in metadata. When a user performs a search, the corresponding terms are visually highlighted, which facilitates the quick identification of relevant information. This function is active and applies to all indexed attributes. In the specific case of multi-valued attributes, the strict term is considered.

* ### Faceted Search

Faceted search can be seen as a map of the search results. After launching a search, facets create a kind of plan of the results by distributing them according to different criteria such as date, category, location, or document type. Each facet represents a potential path to explore to refine and orient the search more precisely.

**Navigating via facets**

* Click on the "Facets" tab in the sidebar.  
* For each facet, check the values you are interested in to progressively refine the search.  
* Example: choice of a date range, keywords, tags, country, city, credit, etc.

**Combining or Excluding Facets**

The combination or exclusion of facets allows you to broaden or narrow the scope of the search. This ensures you find the exact information more effectively.

After selecting a value for a facet (for example: the tag "New"), click on the "..." menu for the value. Several options are offered:

* Disable: to exclude this value from the search. All assets with tags except the "New" tag will be displayed.  
* Enable: when you have excluded a value from the search. The facet will then be reactivated.  
* Edit: to modify a condition (see "Advanced Search" below).  
* Remove: to remove this facet from your search.

**Configuring facets to display**

You can choose which facets are displayed in the sidebar. To configure the facets, you must have Workspace management rights.

Go to the Workspace editor, click on the "Attributes" tab, and for each attribute, decide whether or not to check the "Facets" box.

* ### Advanced Search

Advanced search allows you to quickly find assets by combining several criteria and, in particular, performing searches on specific attributes. Click on the funnel-shaped icon to open advanced search.

**Adding Conditions**

Click on "Add condition".

It is from this window that conditions must be added:

* Selection of a field to search in:  
  * Either a so-called technical field (collection, dates, file size or type, tags, etc.)  
  * Or among your attributes (credit field, title, caption, country, city, keywords, etc.)  
* Selection of the operator: After choosing the field, choose the operator ("starts with", "exists", "contains", "is equal to", etc.; these operators change depending on the chosen condition).  
* Selection of the value: Finally, enter a value: a term, a date, etc.

You can then launch the search by clicking the "Add" button, or add one or more other conditions, as well as one or more groups of conditions to combine search filters on specific fields.

* ### Sorting

You can sort and group your search results: Sort by creation date, modification date, by tags, or attributes. By grouping the results into major sections, you get a display adapted to your needs.

Example: A sort on the "Country" attribute placed in the 1st position, then the city is added. Uncheck the unwanted attributes and move these two elements to the top by drag and drop.

The results are displayed first by country, then by cities.

Check "Group by sections" to add group separators to the results presentation. Click the "Apply" button. The results are displayed first by country, then by cities, separated by major sections.