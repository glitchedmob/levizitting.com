# levizitting.com

## Project Setup
- Create a sqlite database 
  - `cd LeviZitting.Com.Web/umbraco/Data`
    - Make sure to create the folder if it doesn't exist
  - `sqlite3 Umbraco.sqlite.db "VACUUM;"`
- Update your connection string using the dotnet user secrets command
  - `cd LeviZitting.Com.Web`
  - `dotnet user-secrets set "ConnectionStrings:umbracoDbDSN" "Data Source=|DataDirectory|/Umbraco.sqlite.db;Cache=Shared;Foreign Keys=True;Pooling=True"`
