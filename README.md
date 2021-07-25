# The Final Outpost

Explain site

#  API

We offer sdkjlfk

## Applying for access

The file explorer is accessible using the button in left corner of the navigation bar. You can create a new file by clicking the **New file** button in the file explorer. You can also create folders by clicking the **New folder** button.

## General Requirements

You will receive the URL needed to call the API along with your private key.

All methods must be sent using POST. For security reasons, API calls are only valid from HTTPS domains.

The API should only be used to ping once. Please store the individual creature data on your server and don’t ping the site for every page load. Make sure when you display the image on your site that you use the URL provided by the API (https://finaloutpost.net/s/creatureCode.png). /rimg/ and /r/ are dynamic urls for internal use only while as /s/ is a image cache file that will will much faster for you and use less resources for me

## Sending a request

You need to send two variables in addition to your key.

 - **Action**
	 - lab
		 -  Used to both validate a user and to return the user's growing creatures.
	 - creature
		 -  Used to both validate a creature as well as view information about it.
	 - multipleCreatures
		 - Used to both validate multiple creatures.
 - **Var**
	 -  If using the lab call, username expected.
	 - If using the creature calls either a code or a list of codes expcted. See individual calls for more info.

## Processing a request
The API will return any request with a JSON formatted array.

### Return
If the return is not a valid creature or user you will receive the following...
|Key|Value  |
|--|--|
|  error|(bool) true  |
|errorCode|(int)|

If successful you will receive...

|Key|Value|
|--|--|
| error | (bool) false  |
| errorCode | (int) 0 |
|*and then for every creature*|
| Code| (string) |
| Imgsrc | (string) |
| Gotten | (int) timestamp |
| Name | (string) |
| GrowthLevel | (int) |

### Growth Level Key
|Key|Value|
|--|--|
| 1 | Capsule |
| 2 | Juvenile |
| 3 | Adult |

### Error Key
|Key| Value |
|--|--|
| 0 | No error |
| 1 | User not found |
| 2 | User's lab is hidden|
| 3 | No growing creatures |
| 4 | Creature does not exists |

## CAll #1 - Pulling a user's creatures

#### Sample call
``{ "key":"YOUR_KEY_HERE", "action":"lab", "var":"username" }``

#### Response
Case 1: User does not exist
``{ "error":true, "errorCode":1 }``

Case 2: Valid user, no growing creatures
```{ "error":true, "errorCode":3 }``

Case 3: Valid use with growing creatures
```{ "error":false, "errorCode":0, "0":{ "code":"nuiLE", "imgsrc":"https:\/\/finaloutpost.net\/s\/nuiLE.png", "gotten":"1589053720", "name":"Unnamed", "growthLevel":"2" }, "1":{ "code":"aXlvE", "imgsrc":"https:\/\/finaloutpost.net\/s\/aXlvE.png", "gotten":"1589143090", "name":"Unnamed", "growthLevel":"2" }, "2":{ "code":"6bMDs", "imgsrc":"https:\/\/finaloutpost.net\/s\/6bMDs.png", "gotten":"1589163235", "name":"Unnamed", "growthLevel":"2" }, "3":{ "code":"wATyL", "imgsrc":"https:\/\/finaloutpost.net\/s\/wATyL.png", "gotten":"1589169539", "name":"Unnamed", "growthLevel":"2" } }```

## CAll #2 - Validating a Creature
#### Sample call
``{ "key":"YOUR_KEY_HERE", "action":"creature", "var":"code" }``

#### Responses

Case 1: Creature does not exist
``{ "error":true, "errorCode":4 }``

Case 2: Valid creature
``{ "error":false, "errorCode":0, "0": { "code":"cysFg", "imgsrc":"https:\/\/finaloutpost.net\/s\/cysFg.png", "Gotten":"1589221075", "Name":”Unnamed”, "growthLevel":"2", "isStunted": false } }``

## Call #2 - Validating Multiple Creatures
#### Sample call
``{ "key":"YOUR_KEY_HERE", "action":"multipleCreatures", "var":"code1,code2,code3" }``

#### Response
``{ "0":{ "error":false, "code":"PKxey", "growthLevel":1, "isStunted": false }, "1":{ "error":false, "code":"e86yx", "growthLevel":1, "isStunted": false } }``
