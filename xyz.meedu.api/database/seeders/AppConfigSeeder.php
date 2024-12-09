<?php

/*
 * This file is part of the MeEdu.
 *
 * (c) 杭州白书科技有限公司
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Constant\ConfigConstant;

class AppConfigSeeder extends Seeder
{
    public function run()
    {
        $config = [
            // 系统配置
            [
                'group' => '系统',
                'name' => '网站名',
                'field_type' => 'text',
                'sort' => 20,
                'key' => 'meedu.system.name',
                'value' => '',
            ],
            [
                'group' => '系统',
                'name' => '网站Logo',
                'field_type' => 'image',
                'sort' => 25,
                'key' => 'meedu.system.logo',
                'value' => '/images/logo.png',
            ],
            [
                'group' => '系统',
                'name' => 'API访问地址',
                'field_type' => 'text',
                'sort' => 30,
                'default_value' => '',
                'key' => 'app.url',
                'value' => '',
            ],
            [
                'group' => '系统',
                'name' => 'PC访问地址',
                'field_type' => 'text',
                'sort' => 40,
                'default_value' => '',
                'key' => 'meedu.system.pc_url',
                'value' => '',
            ],
            [
                'group' => '系统',
                'name' => 'H5访问地址',
                'field_type' => 'text',
                'sort' => 50,
                'default_value' => '',
                'key' => 'meedu.system.h5_url',
                'value' => '',
            ],
            [
                'group' => '系统',
                'name' => 'ICP备案号',
                'field_type' => 'text',
                'sort' => 70,
                'default_value' => '',
                'key' => 'meedu.system.icp',
                'value' => '',
            ],
            [
                'group' => '系统',
                'name' => 'ICP备案号点击链接',
                'field_type' => 'text',
                'sort' => 80,
                'default_value' => '',
                'key' => 'meedu.system.icp_link',
                'value' => '',
            ],
            [
                'group' => '系统',
                'name' => '公安网备案号',
                'field_type' => 'text',
                'sort' => 90,
                'default_value' => '',
                'key' => 'meedu.system.icp2',
                'value' => '',
            ],
            [
                'group' => '系统',
                'name' => '公安网备案号点击链接',
                'field_type' => 'text',
                'sort' => 100,
                'default_value' => '',
                'key' => 'meedu.system.icp2_link',
                'value' => '',
            ],
            [
                'group' => '系统',
                'name' => '关于我们',
                'field_type' => 'longtext',
                'sort' => 110,
                'default_value' => '',
                'key' => 'meedu.aboutus',
                'value' => '',
            ],

            // 登录
            [
                'group' => '登录',
                'name' => '登录限制',
                'field_type' => 'select',
                'sort' => -1,
                'key' => 'meedu.system.login.limit.rule',
                'option_value' => json_encode([
                    [
                        'title' => '不限制',
                        'key' => \App\Constant\FrontendConstant::LOGIN_LIMIT_RULE_DEFAULT,
                    ],
                    [
                        'title' => '仅允许一台设备在线',
                        'key' => \App\Constant\FrontendConstant::LOGIN_LIMIT_RULE_ALL,
                    ],
                ]),
                'value' => \App\Constant\FrontendConstant::LOGIN_LIMIT_RULE_DEFAULT,
                'help' => '',
            ],

            // QQ登录
            [
                'group' => '登录',
                'name' => 'QQ登录',
                'field_type' => 'switch',
                'sort' => 4,
                'default_value' => 0,
                'key' => 'meedu.member.socialite.qq.enabled',
                'value' => 0,
            ],
            [
                'group' => '登录',
                'name' => 'QQ ClientId',
                'field_type' => 'text',
                'sort' => 5,
                'default_value' => '',
                'key' => 'services.qq.client_id',
                'value' => '',
            ],
            [
                'group' => '登录',
                'name' => 'QQ ClientSecret',
                'field_type' => 'text',
                'sort' => 6,
                'default_value' => '',
                'key' => 'services.qq.client_secret',
                'value' => '',
                'is_private' => 1,
            ],

            // 短信配置
            [
                'group' => '短信',
                'name' => '短信服务商',
                'field_type' => 'select',
                'sort' => 0,
                'default_value' => 'aliyun',
                'key' => 'meedu.system.sms',
                'option_value' => json_encode([
                    [
                        'title' => '阿里云',
                        'key' => 'aliyun',
                    ],
                    [
                        'title' => '腾讯云',
                        'key' => 'tencent',
                    ],
                ]),
                'value' => 'tencent',
            ],
            [
                'group' => '短信',
                'name' => '阿里云 AccessKeyId',
                'field_type' => 'text',
                'sort' => 1,
                'default_value' => '',
                'key' => 'sms.gateways.aliyun.access_key_id',
                'value' => '',
            ],
            [
                'group' => '短信',
                'name' => '阿里云 AccessKeySecret',
                'field_type' => 'text',
                'sort' => 2,
                'default_value' => '',
                'key' => 'sms.gateways.aliyun.access_key_secret',
                'value' => '',
                'is_private' => 1,
            ],
            [
                'group' => '短信',
                'name' => '阿里云 短信签名',
                'field_type' => 'text',
                'sort' => 3,
                'default_value' => '',
                'key' => 'sms.gateways.aliyun.sign_name',
                'value' => '',
            ],
            [
                'group' => '短信',
                'name' => '阿里云 密码重置模板ID',
                'field_type' => 'text',
                'sort' => 4,
                'default_value' => '',
                'key' => 'sms.gateways.aliyun.template.password_reset',
                'value' => '',
            ],
            [
                'group' => '短信',
                'name' => '阿里云 注册模板ID',
                'field_type' => 'text',
                'sort' => 5,
                'default_value' => '',
                'key' => 'sms.gateways.aliyun.template.register',
                'value' => '',
            ],
            [
                'group' => '短信',
                'name' => '阿里云 手机号绑定模板ID',
                'field_type' => 'text',
                'sort' => 6,
                'default_value' => '',
                'key' => 'sms.gateways.aliyun.template.mobile_bind',
                'value' => '',
            ],
            [
                'group' => '短信',
                'name' => '阿里云 手机号登录模板ID',
                'field_type' => 'text',
                'sort' => 7,
                'default_value' => '',
                'key' => 'sms.gateways.aliyun.template.login',
                'value' => '',
            ],

            // 腾讯云短信配置
            [
                'group' => '短信',
                'name' => '腾讯云短信 SdkAppId',
                'field_type' => 'text',
                'sort' => 20,
                'default_value' => '',
                'key' => 'sms.gateways.tencent.sdk_app_id',
                'value' => '',
            ],
            [
                'group' => '短信',
                'name' => '腾讯云短信 Region',
                'field_type' => 'text',
                'sort' => 21,
                'default_value' => '',
                'key' => 'sms.gateways.tencent.region',
                'value' => '',
            ],
            [
                'group' => '短信',
                'name' => '腾讯云短信 SecretId',
                'field_type' => 'text',
                'sort' => 22,
                'default_value' => '',
                'key' => 'sms.gateways.tencent.secret_id',
                'value' => '',
            ],
            [
                'group' => '短信',
                'name' => '腾讯云短信 SecretKey',
                'field_type' => 'text',
                'sort' => 23,
                'default_value' => '',
                'key' => 'sms.gateways.tencent.secret_key',
                'value' => '',
                'is_private' => 1,
            ],
            [
                'group' => '短信',
                'name' => '腾讯云短信 SignName',
                'field_type' => 'text',
                'sort' => 23,
                'default_value' => '',
                'key' => 'sms.gateways.tencent.sign_name',
                'value' => '',
            ],
            [
                'group' => '短信',
                'name' => '腾讯云短信 SecretId',
                'field_type' => 'text',
                'sort' => 22,
                'default_value' => '',
                'key' => 'sms.gateways.tencent.secret_id',
                'value' => '',
            ],
            [
                'group' => '短信',
                'name' => '腾讯云 密码重置模板ID',
                'field_type' => 'text',
                'sort' => 23,
                'default_value' => '',
                'key' => 'sms.gateways.tencent.template.password_reset',
                'value' => '',
            ],
            [
                'group' => '短信',
                'name' => '腾讯云 注册模板ID',
                'field_type' => 'text',
                'sort' => 24,
                'default_value' => '',
                'key' => 'sms.gateways.tencent.template.register',
                'value' => '',
            ],
            [
                'group' => '短信',
                'name' => '腾讯云 手机号绑定模板ID',
                'field_type' => 'text',
                'sort' => 25,
                'default_value' => '',
                'key' => 'sms.gateways.tencent.template.mobile_bind',
                'value' => '',
            ],
            [
                'group' => '短信',
                'name' => '腾讯云 手机号登录模板ID',
                'field_type' => 'text',
                'sort' => 26,
                'default_value' => '',
                'key' => 'sms.gateways.tencent.template.login',
                'value' => '',
            ],

            // 支付宝支付
            [
                'group' => '支付',
                'name' => '支付宝支付',
                'field_type' => 'switch',
                'sort' => 10,
                'key' => 'meedu.payment.alipay.enabled',
                'value' => 0,
            ],
            [
                'group' => '支付',
                'name' => '支付宝AppId',
                'field_type' => 'text',
                'sort' => 20,
                'key' => 'pay.alipay.app_id',
                'value' => '',
            ],
            [
                'group' => '支付',
                'name' => '支付宝公钥',
                'field_type' => 'text',
                'sort' => 30,
                'key' => 'pay.alipay.ali_public_key',
                'value' => '',
                'is_private' => 1,
            ],
            [
                'group' => '支付',
                'name' => '应用私钥',
                'field_type' => 'text',
                'sort' => 35,
                'key' => 'pay.alipay.private_key',
                'value' => '',
                'is_private' => 1,
            ],
            [
                'group' => '支付',
                'name' => '支付宝根证书',
                'field_type' => 'text',
                'sort' => 40,
                'key' => 'pay.alipay.alipay_root_cert',
                'value' => '',
                'is_private' => 1,
            ],
            [
                'group' => '支付',
                'name' => '应用公钥证书',
                'field_type' => 'text',
                'sort' => 50,
                'key' => 'pay.alipay.app_cert_public_key',
                'value' => '',
                'is_private' => 1,
            ],

            // 微信支付
            [
                'group' => '支付',
                'name' => '微信扫码支付',
                'field_type' => 'switch',
                'sort' => 100,
                'key' => 'meedu.payment.wechat.enabled',
                'value' => 0,
                'help' => 'PC端口使用',
            ],
            [
                'group' => '支付',
                'name' => '微信支付',
                'field_type' => 'switch',
                'sort' => 110,
                'key' => 'meedu.payment.wechat-jsapi.enabled',
                'value' => 0,
                'help' => '微信内支付使用',
            ],
            [
                'group' => '支付',
                'name' => '微信支付公众号AppId',
                'field_type' => 'text',
                'sort' => 120,
                'key' => 'pay.wechat.app_id',
                'value' => '',
            ],
            [
                'group' => '支付',
                'name' => '微信支付MchId',
                'field_type' => 'text',
                'sort' => 130,
                'key' => 'pay.wechat.mch_id',
                'value' => '',
            ],
            [
                'group' => '支付',
                'name' => '微信支付Key',
                'field_type' => 'text',
                'sort' => 140,
                'key' => 'pay.wechat.key',
                'value' => '',
                'is_private' => 1,
            ],
            [
                'group' => '支付',
                'name' => '微信支付API证书-cert',
                'field_type' => 'text',
                'sort' => 150,
                'key' => 'pay.wechat.cert_client',
                'value' => '',
                'is_private' => 1,
            ],
            [
                'group' => '支付',
                'name' => '微信支付API证书-key',
                'field_type' => 'text',
                'sort' => 160,
                'key' => 'pay.wechat.cert_key',
                'value' => '',
                'is_private' => 1,
            ],

            // 手动打款
            [
                'group' => '支付',
                'name' => '手动打款',
                'field_type' => 'switch',
                'sort' => 300,
                'key' => 'meedu.payment.handPay.enabled',
                'value' => 0,
            ],
            [
                'group' => '支付',
                'name' => '手动打款说明',
                'field_type' => 'longtext',
                'sort' => 310,
                'key' => 'meedu.payment.handPay.introduction',
                'value' => '',
            ],

            [
                'group' => '视频',
                'name' => '视频存储默认服务',
                'field_type' => 'select',
                'sort' => 1,
                'key' => 'meedu.upload.video.default_service',
                'option_value' => json_encode([
                    [
                        'title' => '阿里云',
                        'key' => 'aliyun',
                    ],
                    [
                        'title' => '腾讯云',
                        'key' => 'tencent',
                    ],
                ]),
                'value' => '',
            ],

            // 阿里云视频配置
            [
                'group' => '视频',
                'name' => '阿里云视频AccessKeyId',
                'field_type' => 'text',
                'sort' => 10,
                'key' => ConfigConstant::ALIYUN_VOD_ACCESS_KEY_ID,
                'value' => '',
            ],
            [
                'group' => '视频',
                'name' => '阿里云视频AccessKeySecret',
                'field_type' => 'text',
                'sort' => 20,
                'key' => ConfigConstant::ALIYUN_VOD_ACCESS_KEY_SECRET,
                'value' => '',
                'is_private' => 1,
            ],
            [
                'group' => '视频',
                'name' => '阿里云视频Region',
                'field_type' => 'text',
                'sort' => 30,
                'key' => ConfigConstant::ALIYUN_VOD_REGION,
                'value' => '',
            ],
            [
                'group' => '视频',
                'name' => '阿里云视频Host',
                'field_type' => 'text',
                'sort' => 40,
                'key' => ConfigConstant::ALIYUN_VOD_HOST,
                'value' => '',
                'is_show' => 0,
            ],
            [
                'group' => '视频',
                'name' => '阿里云点播回调鉴权密钥',
                'field_type' => 'text',
                'sort' => 50,
                'key' => ConfigConstant::ALIYUN_VOD_CALLBACK_KEY,
                'value' => '',
                'is_private' => 1,
                'is_show' => 0,
            ],
            [
                'group' => '视频',
                'name' => '阿里云点播播放域名',
                'field_type' => 'text',
                'sort' => 60,
                'key' => ConfigConstant::ALIYUN_VOD_PLAY_DOMAIN,
                'value' => '',
                'is_private' => 0,
            ],
            [
                'group' => '视频',
                'name' => '阿里云点播播放密钥',
                'field_type' => 'text',
                'sort' => 70,
                'key' => ConfigConstant::ALIYUN_VOD_PLAY_KEY,
                'value' => '',
                'is_private' => 1,
                'is_show' => 0,
            ],

            // 腾讯云视频
            [
                'group' => '视频',
                'name' => '腾讯云视频AppId',
                'field_type' => 'text',
                'sort' => 100,
                'default_value' => '',
                'key' => ConfigConstant::TENCENT_VOD_APP_ID,
                'value' => '',
            ],
            [
                'group' => '视频',
                'name' => '腾讯云视频SecretId',
                'field_type' => 'text',
                'sort' => 110,
                'default_value' => '',
                'key' => ConfigConstant::TENCENT_VOD_SECRET_ID,
                'value' => '',
            ],
            [
                'group' => '视频',
                'name' => '腾讯云视频SecretKey',
                'field_type' => 'text',
                'sort' => 120,
                'default_value' => '',
                'key' => ConfigConstant::TENCENT_VOD_SECRET_KEY,
                'value' => '',
                'is_private' => 1,
            ],
            [
                'group' => '视频',
                'name' => '腾讯云回调鉴权密钥',
                'field_type' => 'text',
                'sort' => 140,
                'key' => ConfigConstant::TENCENT_VOD_CALLBACK_KEY,
                'value' => '',
                'is_private' => 1,
                'is_show' => 0,
            ],
            [
                'group' => '视频',
                'name' => '腾讯云点播播放域名',
                'field_type' => 'text',
                'sort' => 150,
                'key' => ConfigConstant::TENCENT_VOD_PLAY_DOMAIN,
                'value' => '',
                'is_private' => 0,
            ],
            [
                'group' => '视频',
                'name' => '腾讯云点播播放key',
                'field_type' => 'text',
                'sort' => 160,
                'default_value' => '',
                'key' => ConfigConstant::TENCENT_VOD_PLAY_KEY,
                'value' => '',
                'is_private' => 1,
                'is_show' => 0
            ],

            // 会员配置
            [
                'group' => '会员',
                'name' => '强制绑定手机号',
                'field_type' => 'switch',
                'sort' => 0,
                'default_value' => 0,
                'key' => 'meedu.member.enabled_mobile_bind_alert',
                'value' => 0,
            ],
            [
                'group' => '会员',
                'name' => '强制实名认证',
                'field_type' => 'switch',
                'sort' => 0,
                'default_value' => 0,
                'key' => 'meedu.member.enabled_face_verify',
                'value' => 0,
            ],
            [
                'group' => '会员',
                'name' => '新学员注册默认冻结',
                'field_type' => 'switch',
                'sort' => 2,
                'default_value' => 0,
                'key' => 'meedu.member.is_lock_default',
                'value' => 0,
            ],
            [
                'group' => '会员',
                'name' => '默认头像',
                'field_type' => 'image',
                'sort' => 3,
                'key' => 'meedu.member.default_avatar',
                'value' => '/images/default_avatar.jpg',
            ],
            [
                'group' => '会员',
                'name' => '注册协议',
                'field_type' => 'textarea',
                'sort' => 4,
                'default_value' => '',
                'key' => 'meedu.member.protocol',
                'value' => '',
            ],
            [
                'group' => '会员',
                'name' => '隐私政策',
                'field_type' => 'textarea',
                'sort' => 5,
                'default_value' => '',
                'key' => 'meedu.member.private_protocol',
                'value' => '',
            ],
            [
                'group' => '会员',
                'name' => '会员服务协议',
                'field_type' => 'textarea',
                'sort' => 10,
                'default_value' => '',
                'key' => 'meedu.member.vip_protocol',
                'value' => '',
            ],

            // 积分
            [
                'group' => '积分',
                'name' => '注册奖励',
                'field_type' => 'number',
                'sort' => 0,
                'default_value' => 0,
                'key' => 'meedu.member.credit1.register',
                'value' => 0,
            ],
            [
                'group' => '积分',
                'name' => '看完课程',
                'field_type' => 'number',
                'sort' => 2,
                'default_value' => 0,
                'key' => 'meedu.member.credit1.watched_course',
                'value' => 0,
            ],
            [
                'group' => '积分',
                'name' => '看完视频',
                'field_type' => 'number',
                'sort' => 3,
                'default_value' => 0,
                'key' => 'meedu.member.credit1.watched_video',
                'value' => 0,
            ],
            [
                'group' => '积分',
                'name' => '支付订单',
                'field_type' => 'text',
                'sort' => 4,
                'default_value' => 0,
                'key' => 'meedu.member.credit1.paid_order',
                'value' => 0,
                'help' => '注意，支付订单的积分奖励与上面不同，它是根据订单金额*百分比奖励的，所以这里应该填写百分比。举个例子：订单支付金额100元，这里填写0.1，则用户奖励10积分。',
            ],

            // 插件配置
            [
                'group' => '插件配置',
                'name' => '服务地址',
                'field_type' => 'text',
                'sort' => 0,
                'default_value' => '',
                'key' => 'meedu.meeducloud.domain',
                'value' => '',
            ],
            [
                'group' => '插件配置',
                'name' => 'UserID',
                'field_type' => 'text',
                'sort' => 1,
                'default_value' => '',
                'key' => 'meedu.meeducloud.user_id',
                'value' => '',
            ],
            [
                'group' => '插件配置',
                'name' => '密码',
                'field_type' => 'text',
                'sort' => 2,
                'default_value' => '',
                'key' => 'meedu.meeducloud.password',
                'value' => '',
                'is_private' => 1,
            ],

            // 播放器配置
            [
                'group' => '播放器配置',
                'name' => '播放器封面',
                'field_type' => 'image',
                'sort' => 0,
                'key' => 'meedu.system.player_thumb',
                'value' => '/images/player-thumb.png',
            ],
            [
                'group' => '播放器配置',
                'name' => '跑马灯（防止录屏）',
                'field_type' => 'switch',
                'sort' => 1,
                'default_value' => 0,
                'key' => 'meedu.system.player.enabled_bullet_secret',
                'value' => 0,
            ],
            [
                'group' => '播放器配置',
                'name' => '跑马灯-内容',
                'field_type' => 'text',
                'sort' => 10,
                'key' => 'meedu.system.player.bullet_secret.text',
                'value' => '',
                'help' => '已支持变量：${mobile}=手机号，${nickname}=用户昵称，${id}=用户ID。不填写则默认为用户手机号。',
            ],
            [
                'group' => '播放器配置',
                'name' => '跑马灯-文字大小',
                'field_type' => 'number',
                'sort' => 20,
                'key' => 'meedu.system.player.bullet_secret.size',
                'value' => 14,
            ],
            [
                'group' => '播放器配置',
                'name' => '跑马灯-文字颜色',
                'field_type' => 'text',
                'sort' => 30,
                'key' => 'meedu.system.player.bullet_secret.color',
                'value' => '',
            ],
            [
                'group' => '播放器配置',
                'name' => '跑马灯-文字透明度',
                'field_type' => 'text',
                'sort' => 40,
                'key' => 'meedu.system.player.bullet_secret.opacity',
                'value' => 1,
            ],

            // 微信公众号
            [
                'group' => '微信公众号',
                'name' => 'AppId',
                'field_type' => 'text',
                'sort' => 0,
                'key' => 'meedu.mp_wechat.app_id',
                'value' => '',
            ],
            [
                'group' => '微信公众号',
                'name' => 'AppSecret',
                'field_type' => 'text',
                'sort' => 1,
                'key' => 'meedu.mp_wechat.app_secret',
                'value' => '',
                'is_private' => 1,
            ],
            [
                'group' => '微信公众号',
                'name' => 'Token',
                'field_type' => 'text',
                'sort' => 2,
                'key' => 'meedu.mp_wechat.token',
                'value' => '',
                'is_private' => 1,
            ],
            [
                'group' => '微信公众号',
                'name' => 'AesKey',
                'field_type' => 'text',
                'sort' => 3,
                'key' => 'meedu.mp_wechat.aes_key',
                'value' => '',
                'is_private' => 1,
            ],
            [
                'group' => '微信公众号',
                'name' => '启动微信登录',
                'field_type' => 'switch',
                'sort' => 6,
                'key' => 'meedu.mp_wechat.enabled_oauth_login',
                'value' => 0,
            ],
            [
                'group' => '微信公众号',
                'name' => '启用微信分享',
                'field_type' => 'switch',
                'sort' => 8,
                'key' => 'meedu.mp_wechat.enabled_share',
                'value' => 0,
            ],
            [
                'group' => '微信公众号',
                'name' => '微信分享标题',
                'field_type' => 'text',
                'sort' => 10,
                'key' => 'meedu.mp_wechat.share.title',
                'value' => '',
            ],
            [
                'group' => '微信公众号',
                'name' => '微信分享描述',
                'field_type' => 'text',
                'sort' => 11,
                'key' => 'meedu.mp_wechat.share.desc',
                'value' => '',
            ],
            [
                'group' => '微信公众号',
                'name' => '微信分享图片',
                'field_type' => 'image',
                'sort' => 12,
                'key' => 'meedu.mp_wechat.share.imgUrl',
                'value' => '',
            ],

            // 注册送VIP
            [
                'group' => '注册送VIP',
                'name' => '开启',
                'field_type' => 'switch',
                'sort' => 0,
                'key' => 'meedu.member.register.vip.enabled',
                'value' => 0
            ],
            [
                'group' => '注册送VIP',
                'name' => 'VipID',
                'field_type' => 'number',
                'sort' => 1,
                'key' => 'meedu.member.register.vip.role_id',
                'value' => 0
            ],
            [
                'group' => '注册送VIP',
                'name' => '赠送天数',
                'field_type' => 'number',
                'sort' => 2,
                'key' => 'meedu.member.register.vip.days',
                'value' => 0,
            ],

            // 全文搜索配置
            [
                'group' => '全文搜索',
                'name' => 'MeiliSearch Host',
                'field_type' => 'text',
                'sort' => 1,
                'key' => 'scout.meilisearch.host',
                'value' => '',
            ],
            [
                'group' => '全文搜索',
                'name' => 'MeiliSearch Key',
                'field_type' => 'text',
                'sort' => 5,
                'key' => 'scout.meilisearch.key',
                'value' => '',
                'is_private' => true,
            ],

            // 微信实名认证
            [
                'group' => '微信实名认证',
                'name' => 'SecretId',
                'field_type' => 'text',
                'sort' => 10,
                'key' => 'tencent.face.secret_id',
                'value' => '',
            ],
            [
                'group' => '微信实名认证',
                'name' => 'SecretKey',
                'field_type' => 'text',
                'sort' => 20,
                'key' => 'tencent.face.secret_key',
                'value' => '',
                'is_private' => true,
            ],
            [
                'group' => '微信实名认证',
                'name' => 'RuleID',
                'field_type' => 'text',
                'sort' => 30,
                'key' => 'tencent.face.rule_id',
                'value' => '',
            ],

            // 公共文件存储配置
            [
                'group' => '公共文件存储',
                'name' => 'AccessKeyId',
                'field_type' => 'text',
                'sort' => 10,
                'key' => 's3.public.key_id',
                'value' => '',
            ],
            [
                'group' => '公共文件存储',
                'name' => 'AccessKeySecret',
                'field_type' => 'text',
                'sort' => 20,
                'key' => 's3.public.key_secret',
                'value' => '',
                'is_private' => true,
            ],
            [
                'group' => '公共文件存储',
                'name' => 'Region',
                'field_type' => 'text',
                'sort' => 30,
                'key' => 's3.public.region',
                'value' => '',
            ],
            [
                'group' => '公共文件存储',
                'name' => 'Bucket',
                'field_type' => 'text',
                'sort' => 40,
                'key' => 's3.public.bucket',
                'value' => '',
            ],
            [
                'group' => '公共文件存储',
                'name' => '内网端口',
                'field_type' => 'text',
                'sort' => 50,
                'key' => 's3.public.endpoint.internal',
                'value' => '',
            ],
            [
                'group' => '公共文件存储',
                'name' => '外网端口',
                'field_type' => 'text',
                'sort' => 60,
                'key' => 's3.public.endpoint.external',
                'value' => '',
            ],
            [
                'group' => '公共文件存储',
                'name' => 'CDN加速域名',
                'field_type' => 'text',
                'sort' => 90,
                'key' => 's3.public.cdn.domain',
                'value' => '',
            ],

            // 私有文件存储配置
            [
                'group' => '私有文件存储',
                'name' => 'AccessKeyId',
                'field_type' => 'text',
                'sort' => 10,
                'key' => 's3.private.key_id',
                'value' => '',
            ],
            [
                'group' => '私有文件存储',
                'name' => 'AccessKeySecret',
                'field_type' => 'text',
                'sort' => 20,
                'key' => 's3.private.key_secret',
                'value' => '',
                'is_private' => true,
            ],
            [
                'group' => '私有文件存储',
                'name' => 'Region',
                'field_type' => 'text',
                'sort' => 30,
                'key' => 's3.private.region',
                'value' => '',
            ],
            [
                'group' => '私有文件存储',
                'name' => 'Bucket',
                'field_type' => 'text',
                'sort' => 40,
                'key' => 's3.private.bucket',
                'value' => '',
            ],
            [
                'group' => '私有文件存储',
                'name' => '内网端口',
                'field_type' => 'text',
                'sort' => 50,
                'key' => 's3.private.endpoint.internal',
                'value' => '',
            ],
            [
                'group' => '私有文件存储',
                'name' => '外网端口',
                'field_type' => 'text',
                'sort' => 60,
                'key' => 's3.private.endpoint.external',
                'value' => '',
            ],
        ];

        foreach ($config as $item) {
            $configItem = \App\Services\Base\Model\AppConfig::query()->where('key', $item['key'])->first();
            if ($configItem) {
                if (
                    $item['group'] !== $configItem['group'] ||
                    $item['name'] !== $configItem['name'] ||
                    $item['field_type'] !== $configItem['field_type'] ||
                    $item['sort'] !== $configItem['sort'] ||
                    (isset($item['option_value']) && $item['option_value'] !== $configItem['option_value'])
                ) {
                    //产生了变化->提交修改
                    $configItem
                        ->fill([
                            'group' => $item['group'],
                            'name' => $item['name'],
                            'field_type' => $item['field_type'],
                            'sort' => $item['sort'],
                            'option_value' => $item['option_value'] ?? null,
                        ])
                        ->save();
                }
            } else {
                \App\Services\Base\Model\AppConfig::create($item);
            }
        }
    }
}
