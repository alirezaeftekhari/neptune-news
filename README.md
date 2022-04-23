### What is neptune news?
A web scraper that provides a single view for three news agencies ([YJC news](https://www.yjc.news/), [Tasnim news](https://www.tasnimnews.com/) and [Fars news](https://www.farsnews.ir/)).

### Do you want to see it live?
Click [this link](https://neptune-news.herokuapp.com/) to see the deployed version.

### How it works?
When the client call the neptune news server, neptune news server sends a HTTP request to the news agencies servers and after that parse the HTML Doc (the returned response) for extracting the news titles, links, images and descriptions.

### Dependencies:
[DiDOM - simple and fast HTML parser.](https://github.com/Imangazaliev/DiDOM)
