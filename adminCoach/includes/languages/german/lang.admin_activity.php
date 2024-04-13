<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: torvista 2022 Jun 12 New in v1.5.8-alpha $
*/

$define = [
    'HEADING_TITLE' => '管理员活动日志管理器',  
    'HEADING_SUB1' => '查看或导出日志',  
    'HEADING_SUB2' => '清除日志历史',  
    'TEXT_ACTIVITY_EXPORT_FORMAT' => '导出文件格式：',  
    'TEXT_ACTIVITY_EXPORT_FILENAME' => '导出文件名：',  
    'TEXT_ACTIVITY_EXPORT_SAVETOFILE' => '保存到服务器上的文件吗？（否则将直接从此窗口流式传输以供下载）',  
    'TEXT_ACTIVITY_EXPORT_DEST' => '目标：',  
    'SUCCESS_EXPORT_ADMIN_ACTIVITY_LOG' => '导出完成。',  
    'FAILURE_EXPORT_ADMIN_ACTIVITY_LOG' => '警告：导出失败。无法成功写入文件',  
    'TEXT_INSTRUCTIONS' => '<u>说明</u><br>  
    您可以使用此页面将您的 Zen Cart&reg; 管理员用户访问活动导出为 CSV 文件以进行存档。<br>  
    如果您的网站遭到攻击，您应该保存这些数据以用于欺诈调查。这是 PCI 合规性的要求。<br>  
    <ol>  
    <li>选择是否显示或导出到文件。</li>  
    <li>输入文件名。（必须以以下之一结尾：.csv .txt .htm .html .xml）</li>  
    <li>点击保存以继续。</li>  
    <li>根据您的浏览器提供的选项，选择是保存还是打开文件。</li></ol>  
    ',  
    'TEXT_INFO_ADMIN_ACTIVITY_LOG' => '<strong>从数据库中清空管理员活动日志表<br>警告：在运行此更新之前，请确保备份您的数据库！</strong><br>管理员活动日志是一个跟踪方法，用于记录管理员的活动。 <br>由于其性质，它可以变得非常庞大，非常快，因此需要不时地清理。<br>当记录数达到50,000条或60天时，会给出警告，以先发生者为准。<br><span class="alert">注意：为了PCI合规性，您需要将管理员活动日志历史记录保留12个月。<br>在清除日志数据之前，最好通过选择“导出到CSV”并点击上面的“保存”来归档您的日志。</span>',  
    'TEXT_ADMIN_LOG_PLEASE_CONFIRM_ERASE' => '<strong><span class="alert">警告！：您即将从数据库中删除*重要的*审计记录。</span></strong><br>在继续之前，您应首先确认您已经有一个可靠的数据库备份。<br>继续操作即表示您接受这些信息将被删除，并了解您对此数据的法律责任。<br><br>我了解我的责任，并希望通过点击“重置”来继续删除操作：',  
    'SUCCESS_CLEAN_ADMIN_ACTIVITY_LOG' => '<strong>已完成</strong>管理员活动日志的清除',  
    'TEXT_NO_RECORDS_FOUND' => '使用您选择的过滤器未找到记录。',  
    'TEXT_EXPORTFORMAT0' => '导出为HTML（适合屏幕查看）',  
    'TEXT_EXPORTFORMAT1' => '导出为CSV（适合导入到电子表格中）',  
    'TEXT_EXPORTFORMAT2' => '导出为TXT',  
    'TEXT_EXPORTFORMAT3' => '导出为XML',  
    'TEXT_ACTIVITY_EXPORT_FILTER' => '您想查看哪些日志数据？',  
    'TEXT_EXPORTFILTER0' => '所有记录的数据，无论严重级别如何。',  
    'TEXT_EXPORTFILTER1' => 'INFO - 一般记录信息',  
    'TEXT_EXPORTFILTER2' => 'NOTICE - 值得定期查看的重要信息',
    'TEXT_EXPORTFILTER3' => '警告 - 应每日审核的活动',  
    'TEXT_EXPORTFILTER4' => '同时包含通知和警告（用于审核的常见组合）',  
    'TEXT_ACTIVITY_EXPORT_FILTER_USER' => '按管理员用户筛选：',  
    'TEXT_EXPORTFILTER_USER' => '所有管理员用户',
    `'TEXT_INTERPRETING_LOG_DATA' => '<p><strong>日志数据解释</strong></p><ul><li><strong>严重性</strong> - 日志记录的标准通常将严重性描述如下： <ul> <li><strong>INFO</strong> 表示一般活动。这可能包含或不包含显著的细节。</li> <li><strong>NOTICE</strong> 表示使用了更高权限的活动，可能包括创建新的管理员用户或添加新的支付模块等操作。它也提示当在网页上提交的数据包含潜在风险的内容（如脚本标签或内嵌的iframe）时，表示有人（可能是不满的员工或入侵者）正在向您的产品/类别/页面添加恶意内容。这些应定期审查以发现任何异常，如未经授权的活动。</li> <li><strong>WARNING</strong> 用于表示严重问题，如删除支付模块或管理员用户。这些活动若不及时发现，可能预示即将出现的问题。这些应经常审查，建议每天一次。</li> </ul> </li> <li><strong>admin_user</strong> - 这将显示管理员用户的 ID 号，后跟其管理员用户名。如果未登录，将显示 0。</li> <li><strong>page_accessed</strong> - 这将指示访问的页面名称，从而提供关于正在进行的活动类型的线索。</li> <li><strong>parameters</strong> - 这是访问页面的 URI 的其余部分，进一步指示访问者尝试进行的活动类型。</li> <li><strong>flagged</strong> - 如果设置为 1，则表示您应检查 "postdata" 字段中记录的内容，以查找未经授权的脚本或 iframe 或其他潜在危险内容的输入。可疑内容的解释将列在 "attention" 字段中。</li> <li><strong>attention</strong> - '` . '这将会包含与可疑活动类型相关的建议，如果标记了，则应在“postdata”字段中进行审查。</li>  
    <li><strong>logmessage</strong> - 这包含系统记录的有关正在进行的活动的任何消息，例如安装某个模块。</li>  
    <li><strong>postdata</strong> - 这包含原始的POST数据（已经清除了一些敏感信息），以便于在怀疑存在恶意活动时进行审查。</li>  
    </ul>',
];

return $define;
