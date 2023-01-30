# The Final Outpost API

## Applying For Access

## General Requirements
The API is available at ``https://finaloutpost.net/api/v1``.  You need a private key to access it, which is provided after applying for access. All API calls must originate from an HTTPS domain.

If you are displaying creature images on your site, please only use the image URL provided by the API as it is a static cached image and much less resource intensive for us.

## Processing A Request
The API will return any request with a JSON formatted array.  See ``/resources`` in this repo to find provided Error enums in PHP and typescript.

## End Points
### Fetching information about a single creature
End point
```
GET: https://finaloutpost.net/api/v1/creature/{code}
```

Response
```json
{
    "error": bool,
    "errorCode": int,
    "code": string,
    "imgsrc": string,
    "gotten": int,
    "growthLevel": int,
    "name": string,
    "isStunted": bool,
    "breedName": string,
    "genetics": string,
    "gender": string
}
```

### Fetching information about multiple creatures
End point
```
GET: https://finaloutpost.net/api/v1/creatures/?code[]=codeA&code[]=codeB&code[]codeC
```

Response
```json
{
    "error": bool,
    "errorCode": int,
    "creatures": [
        {
            "error": bool,
            "errorCode": int,
            "code": string,
            "imgsrc": string,
            "gotten": int,
            "growthLevel": int,
            "name": string,
            "isStunted": bool,
            "breedName": string,
            "genetics": string,
            "gender": string
        },
        {
           "error": bool,
           "errorCode": int,
           "code": string,
           "imgsrc": string,
           "gotten": int,
           "growthLevel": int,
           "name": string,
           "isStunted": bool,
           "breedName": string,
           "genetics": string,
           "gender": string
        },
        etc
    ]
}
```

### Fetching All Creatures of Defined Species By Username
End point
```
GET: https://finaloutpost.net/api/v1/creatures/species/{username}/{speciesName}
```

Response
```json
{
  "error": bool,
  "errorCode": int,
  "creatures": [
    {
      "error": bool,
      "errorCode": int,
      "code": string,
      "imgsrc": string,
      "gotten": int,
      "growthLevel": int,
      "name": string,
      "isStunted": bool,
      "breedName": string,
      "genetics": string,
      "gender": string
    },
    {
      "error": bool,
      "errorCode": int,
      "code": string,
      "imgsrc": string,
      "gotten": int,
      "growthLevel": int,
      "name": string,
      "isStunted": bool,
      "breedName": string,
      "genetics": string,
      "gender": string
    },
    etc
  ]
}
```
### Fetching All Growing Creatures By Username
End point
```
GET: https://finaloutpost.net/api/v1/lab/{username}
```

Response
```json
{
  "error": bool,
  "errorCode": int,
  "creatures": [
    {
      "error": bool,
      "errorCode": int,
      "code": string,
      "imgsrc": string,
      "gotten": int,
      "growthLevel": int,
      "name": string,
      "isStunted": bool,
      "breedName": string,
      "genetics": string,
      "gender": string
    },
    {
      "error": bool,
      "errorCode": int,
      "code": string,
      "imgsrc": string,
      "gotten": int,
      "growthLevel": int,
      "name": string,
      "isStunted": bool,
      "breedName": string,
      "genetics": string,
      "gender": string
    },
    etc
  ]
}
```

### Fetching All Creatures By Tab
Please note that username is an optional param, but it **must** be supplied if you are trying to access the default tab.

End point:
``` 
GET: https://finaloutpost.net/api/v1/tab/{tabId}/{username?}
```
Response
```json
{
  "error": bool,
  "errorCode": int,
  "creatures": [
    {
      "error": bool,
      "errorCode": int,
      "code": string,
      "imgsrc": string,
      "gotten": int,
      "growthLevel": int,
      "name": string,
      "isStunted": bool,
      "breedName": string,
      "genetics": string,
      "gender": string
    },
    {
      "error": bool,
      "errorCode": int,
      "code": string,
      "imgsrc": string,
      "gotten": int,
      "growthLevel": int,
      "name": string,
      "isStunted": bool,
      "breedName": string,
      "genetics": string,
      "gender": string
    },
    etc
  ]
}
```
