<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: torvista 2022 Feb 14 New in v1.5.8-alpha $
*/

$define = [
  'HEADING_TITLE' => '促销管理器',  
  'SUBHEADING_TITLE' => '促销管理器使用提示：',
    'INFO_TEXT' => '<ul>
                      <li>  
                        对于折扣和价格范围，请始终使用点 '.' 作为小数点分隔符。  
                      </li>  
                      <li>  
                        在创建/编辑产品时，请输入相同货币的金额。  
                      </li>  
                      <li>  
                        在折扣字段中，您可以输入要扣除的金额或百分比，或替换价格。  
                        （例如：从所有价格中扣除$5.00，从所有价格中扣除10%，或将所有价格更改为$25.00）  
                      </li>  
                      <li>  
                        输入价格范围将限制受影响的产品。  
                        （例如：仅限于从$50.00到$150.00之间的产品）  
                      </li>  
                      <li>  
                        如果产品是特价商品并且适用于此次销售，您必须选择要采取的操作：  
                        <ul>  
                          <li>  
                            <strong>忽略特价 - 应用于产品价格并替换特价</strong><br>  
                            销售折扣将应用于产品的常规价格。  
                            （例如：常规价格为$10.00，特价是$9.50，销售条件是10%。  
                            产品的最终销售价将显示为$9.00。特价被忽略。）  
                          </li>  
                        </ul>  
                      </li><li>  
                      <strong>忽略促销条件 - 当特价存在时不应用促销</strong><br>  
                      促销折扣不会应用于特价商品。特价价格将独立于促销显示。  
                      （例如：常规价格$10.00，特价是$9.50，促销条件是10%。产品最终售价将显示为$9.50。  
                      促销条件被忽略。）  
                    </li>  
                    <li>  
                      <strong>将促销折扣应用于特价 - 否则应用于价格</strong><br>  
                      促销折扣将应用于特价价格。将显示一个综合价格。  
                      （例如：常规价格$10.00，特价是$9.50，促销条件是10%。产品最终售价将显示为$8.55。  
                      在特价基础上再减10%。）  
                    </li>  
                    </ul>  
                    </li>  
                    <li>  
                      留空起始日期将立即开始促销。  
                    </li>  
                    <li>  
                      如果您不希望促销过期，请留空结束日期。  
                    </li>  
                    <li>  
                      勾选一个分类将自动包括其子类。  
                    </li>
                  </ul>',
];

return $define;
