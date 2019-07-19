local uri_args=ngx.req.get_uri_args() -- 获取uri的参数
local id = uri_args['id']
local server = { '119.3.109.0:9800', '119.3.109.0:9801' }
local index = ngx.crc32_long(id) % table.getn(server)

uri = "http://" .. server[index]
require();
