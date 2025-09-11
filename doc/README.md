# general documentation
`/doc` is the directory which contains general documentation

The **documentation-builder** will fetch this directory on **github**

# per application documentation

every "application" directory (`dashboard`, `/databox/api`, ...)
may contain its own documentation in a `doc` directory, 
which be included in the corresponding docker image - pushed in the aws registry -.

The **documentation-builder** will fetch this directory 
from the images on **aws ecr**

# fusion

the documentation builder will fusion each "application" doc directory to the general one.

